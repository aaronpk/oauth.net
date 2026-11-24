<?php
// xml_to_array() replaced laminas-xml2json. The expected values here are what
// json_decode(Laminas\Xml2Json\Xml2Json::fromXml($xml, false), true) returned.

class XmlTest extends PHPUnit\Framework\TestCase {

  public function testShapeMatchesXml2Json() {
    $xml = <<<XML
<?xml version="1.0"?>
<root a="1" b=" x "><item>one</item><item>two</item><item id="3">three</item><zero>0</zero><empty/><attr k="v"/>
<nested><item><x>1</x></item><item><x>2</x><x>3</x></item></nested>  mixed text  <ns:thing xmlns:ns="urn:x">hidden</ns:thing><y>0<z>1</z></y></root>
XML;
    $this->assertSame([
      'root' => [
        'item' => ['one', 'two', ['@attributes' => ['id' => '3'], '@text' => 'three']],
        'zero' => '0',
        'empty' => '',
        'attr' => ['@attributes' => ['k' => 'v']],
        'nested' => ['item' => [['x' => '1'], ['x' => ['2', '3']]]],
        'y' => ['z' => '1'],
        '@attributes' => ['a' => '1', 'b' => 'x'],
        '@text' => 'mixed text',
      ]
    ], xml_to_array($xml));
  }

  public function testBibxmlReference() {
    $xml = '<reference anchor="RFC6749" target="https://www.rfc-editor.org/info/rfc6749"><front>'
      .'<title>The OAuth 2.0 Authorization Framework</title>'
      .'<author fullname="D. Hardt" initials="D." role="editor" surname="Hardt"/>'
      .'<date month="October" year="2012"/></front>'
      .'<seriesInfo name="RFC" value="6749"/></reference>';
    $data = xml_to_array($xml);
    $this->assertSame('D. Hardt', $data['reference']['front']['author']['@attributes']['fullname']);
    $this->assertSame('The OAuth 2.0 Authorization Framework', $data['reference']['front']['title']);
    $this->assertSame('6749', $data['reference']['seriesInfo']['@attributes']['value']);
  }

  public function testRejectsEntities() {
    $this->expectException(RuntimeException::class);
    $this->expectExceptionMessageMatches('/ENTITY/');
    xml_to_array('<?xml version="1.0"?><!DOCTYPE r [<!ENTITY e "boom">]><r>&e;</r>');
  }

  public function testAllowsDoctypeWithoutEntities() {
    $data = xml_to_array('<?xml version="1.0"?><!DOCTYPE rfc SYSTEM "rfc2629.dtd"><rfc n="1"><front><title>T</title></front></rfc>');
    $this->assertSame('T', $data['rfc']['front']['title']);
  }

  public function testRejectsInvalidXml() {
    $this->expectException(RuntimeException::class);
    xml_to_array('<r><unclosed></r>');
  }

}
