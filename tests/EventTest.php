<?php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EventTest extends PHPUnit\Framework\TestCase {

  /**
   * @dataProvider eventJSON
   */
  public function testJSONFileSyntax($event, $f) {

    if($event == null) {
      $this->fail('JSON syntax error in file: '.$f);
    }

    // Check for required fields
    $this->assertArrayHasKey('name', $event, 'Filename: '.$f);
    $this->assertArrayHasKey('start_date', $event, 'Filename: '.$f);
    $this->assertArrayHasKey('location', $event, 'Filename: '.$f);
    $this->assertArrayHasKey('url', $event, 'Filename: '.$f);

    // Check that start date looks like a date
    $this->assertRegexp('/\d{4}-\d{2}-\d{2}/', $event['start_date'], 'Filename: '.$f);

    // Check that the event URL is an absolute or relative URL
    $this->assertRegexp('/^(https?:\/\/.+|\/.+)/', $event['url'], 'Filename: '.$f);

  }

  public function eventJSON()
  {

    $files = glob(__DIR__.'/../events/data/*.json');
    foreach($files as $f) {
      yield basename($f) => [json_decode(file_get_contents($f), true), $f];
    }

  }

}
