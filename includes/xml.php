<?php
// Converts an XML document to a nested array, in the same shape that
// json_decode(Laminas\Xml2Json\Xml2Json::fromXml($xml, false), true) produced.
// laminas-xml2json was replaced with this because its dependencies don't
// support current PHP versions.
//
// The shape:
//   - The result has one key, the root element's name.
//   - An element with no children is its trimmed text, or, when it has
//     attributes, ['@attributes' => [...], '@text' => text].
//   - An element with children is an array of child name => value. A name
//     that repeats becomes a list. Attributes go in '@attributes' and
//     non-empty text in '@text'.
//   - Like the original, text that is empty() (including "0") is dropped,
//     and only children in the default namespace are included.

function xml_to_array(string $xml): array {
  // Entities are not substituted (no LIBXML_NOENT) and nothing is fetched
  // from the network (LIBXML_NONET)
  $previous = libxml_use_internal_errors(true);
  $dom = new DOMDocument();
  $loaded = $dom->loadXML($xml, LIBXML_NONET);
  libxml_clear_errors();
  libxml_use_internal_errors($previous);

  if(!$loaded) {
    throw new RuntimeException('Function fromXml was called with invalid XML');
  }

  // Refuse documents that declare entities, as laminas-xml did, to rule out
  // entity expansion and XXE attacks
  foreach($dom->childNodes as $child) {
    if($child->nodeType === XML_DOCUMENT_TYPE_NODE && $child->entities->length > 0) {
      throw new RuntimeException('Detected use of ENTITY in XML, disabled to prevent XXE/XEE attacks');
    }
  }

  $result = _xml_to_array_element(simplexml_import_dom($dom), 0);

  // Round trip through JSON, as the original did, so the values are plain
  // strings and arrays
  return json_decode(json_encode($result), true);
}

function _xml_to_array_element(SimpleXMLElement $element, int $depth): array {
  if($depth > 25) {
    throw new RuntimeException('Function processXml exceeded the allowed recursion depth of 25');
  }

  $children = $element->children();
  $name = $element->getName();
  $value = trim((string)$element);
  $attributes = (array)$element->attributes();

  if(!$children) {
    if(!empty($attributes)) {
      foreach($attributes['@attributes'] as $k => $v) {
        $attributes['@attributes'][$k] = trim((string)$v);
      }
      if(!empty($value)) {
        $attributes['@text'] = $value;
      }
      return [$name => $attributes];
    }
    return [$name => $value];
  }

  $childArray = [];
  $isList = [];
  foreach($children as $child) {
    $childName = $child->getName();
    $converted = _xml_to_array_element($child, $depth + 1);
    if(!array_key_exists($childName, $childArray)) {
      $childArray[$childName] = $converted[$childName];
      continue;
    }
    if(empty($isList[$childName])) {
      $childArray[$childName] = [$childArray[$childName]];
      $isList[$childName] = true;
    }
    $childArray[$childName][] = $converted[$childName];
  }

  if(!empty($attributes)) {
    foreach($attributes['@attributes'] as $k => $v) {
      $attributes['@attributes'][$k] = trim((string)$v);
    }
    $childArray['@attributes'] = $attributes['@attributes'];
  }

  if(!empty($value)) {
    $childArray['@text'] = $value;
  }

  return [$name => $childArray];
}
