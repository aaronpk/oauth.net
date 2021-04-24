<?php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Yaml\Yaml;

class CodeTest extends PHPUnit\Framework\TestCase {

  /**
   * @dataProvider loadCodeYAML
   */
  public function testFileSyntax($data, $f) {

    if($data == null) {
      $this->fail('YAML syntax error in file: '.$f);
    }

    // Check for required fields
    $this->assertArrayHasKey('name', $data, 'Missing "name" in: '.$f);

    if(isset($data['server_libraries'])) {
      // Check that the libraries are arrays of strings
      $this->assertTrue(is_array($data['server_libraries']), 'server_libraries must be an array: '.$f);
      foreach($data['server_libraries'] as $l) {
        $this->assertIsString($l, 'Found a value of server_libraries that is not a string in: '.$f);
      }
    }

    if(isset($data['client_libraries'])) {
      // Check that the libraries are arrays of strings
      $this->assertTrue(is_array($data['client_libraries']), 'client_libraries must be an array: '.$f);
      foreach($data['client_libraries'] as $l) {
        $this->assertIsString($l, 'Found a value of client_libraries that is not a string in: '.$f);
      }
    }

    // Ensure there are no other keys
    $keys = array_keys($data);
    $this->assertEmpty(array_diff($keys, ['name', 'server_libraries', 'client_libraries']), 'File contains extra properties: '.$f);

  }

  public function loadCodeYAML()
  {

    $files = glob(__DIR__.'/../data/code/*.yml');
    foreach($files as $f) {
      yield basename($f) => [Yaml::parseFile($f), $f];
    }

  }

}
