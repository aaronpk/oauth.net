<?php
$page_title = "OAuth Events &mdash; OAuth";
$page_section = "events";
$page_secondary = "";
$page_meta_description = "";

require('../includes/_header.php');

$events = [
  [
    'name'       => 'Internet Identity Workshop XXVIII',
    'start_date' => '2019-05-30',
    'end_date'   => '2019-05-02',
    'location'   => 'Computer History Museum, Mountain View, California',
    'url'        => 'http://www.internetidentityworkshop.com/',
  ],
  [
    'name'       => 'Internet Identity Workshop XXVII',
    'start_date' => '2018-10-23',
    'end_date'   => '2018-10-25',
    'location'   => 'Computer History Museum, Mountain View, California',
    'url'        => 'http://www.internetidentityworkshop.com/',
  ],
  [
    'name'       => 'IETF 104 Prague',
    'start_date' => '2019-03-23',
    'end_date'   => '2019-03-29',
    'location'   => 'Prague, Czech Republic',
    'url'        => 'https://www.ietf.org/how/meetings/104/',
  ],
  [
    'name'       => 'IETF 105 Montreal',
    'start_date' => '2019-07-20',
    'end_date'   => '2019-07-26',
    'location'   => 'Montreal, Canada',
    'url'        => 'https://www.ietf.org/how/meetings/105/',
  ],
  [
    'name'       => 'IETF 106 Singapore',
    'start_date' => '2019-11-16',
    'end_date'   => '2019-11-22',
    'location'   => 'Singapore',
    'url'        => 'https://www.ietf.org/how/meetings/106/',
  ],
  [
    'name'       => 'IETF 103 Bangkok',
    'start_date' => '2018-11-03',
    'end_date'   => '2018-11-09',
    'location'   => 'Bangkok, Thailand',
    'url'        => 'https://www.ietf.org/how/meetings/103/',
  ],
  [
    'name'       => 'IETF 102 Montreal',
    'start_date' => '2018-07-14',
    'end_date'   => '2018-07-20',
    'location'   => 'Montreal, Canada',
    'url'        => 'https://www.ietf.org/how/meetings/102/',
  ],
  [
    'name'       => 'IETF 101 London',
    'start_date' => '2018-03-17',
    'end_date'   => '2018-03-23',
    'location'   => 'London, England',
    'url'        => 'https://www.ietf.org/how/meetings/101/',
  ],
  [
    'name'       => 'IETF 100 Singapore',
    'start_date' => '2017-11-11',
    'end_date'   => '2017-11-17',
    'location'   => 'Singapore',
    'url'        => 'https://www.ietf.org/how/meetings/100/',
  ],
  [
    'name'       => 'OAuth Security Workshop 2019',
    'start_date' => '2019-03-20',
    'end_date'   => '2019-03-22',
    'location'   => 'Stuttgart, Germany',
    'url'        => 'https://sec.uni-stuttgart.de/events/osw2019',
  ],
  [
    'name'       => 'OAuth Security Workshop 2018',
    'start_date' => '2018-03-14',
    'end_date'   => '2018-03-16',
    'location'   => 'Trento, Italy',
    'url'        => 'https://st.fbk.eu/osw2018',
  ],
  [
    'name'       => 'OAuth Security Workshop 2017',
    'start_date' => '2017-07-13',
    'end_date'   => '2017-07-14',
    'location'   => 'Zürich, Switzerland',
    'url'        => 'https://zisc.ethz.ch/oauth-security-workshop-2017/',
  ],
  [
    'name'       => 'OAuth Security Workshop 2016',
    'start_date' => '2016-07-14',
    'end_date'   => '2016-07-15',
    'location'   => 'Trier, Germany',
    'url'        => 'https://sec.uni-stuttgart.de/events/osw2016',
  ],
  [
    'name'       => 'Yahoo! Hack Day',
    'start_date' => '2008-09-12',
    'end_date'   => '2008-09-13',
    'location'   => 'Yahoo! Sunnyvale, California',
    'url'        => 'http://web.archive.org/web/20080910101002/http://www.hackday.org:80/',
    'articles'   => [
      ['url' => 'https://www.flickr.com/photos/justinwdavis/albums/72157607266904006', 'name' => 'Photos from Yahoo! Open Hack Day 2008', 'author' => 'Justin Davis'],
    ]
  ],
  [
    'name'       => 'OAuth Summit 2008',
    'start_date' => '2008-06-26',
    'location'   => 'Santa Clara, CA',
    'url'        => 'https://wiki.oauth.net/OAuthSummit2008',
    'articles'   => [
      ['url' => 'https://hueniverse.com/i-can-had-open-oauth-first-summit-a-hit-754b5985e28d', 'name' => 'I CAN HAD OPEN: OAuth First Summit a Hit!', 'author' => 'Eran Hammer'],
      ['url' => 'https://www.flickr.com/photos/ogimogi/albums/72157605973715695', 'name' => 'Photos from OAuth Summit 2008', 'author' => 'Eran Sandler'],
      ['url' => 'https://therealmccrea.com/2008/10/20/live-blogging-the-openidoauth-ux-summit/', 'name' => 'Live Blogging the OpenID/OAuth UX Summit', 'author' => 'John McCrea'],
    ]
  ],
];

// Filter only upcoming events
$upcoming = array_filter($events, function($e){
  return strtotime($e['end_date'] ?? $e['start_date']) >= time();
});
// Sort chronological next to farthest future
usort($upcoming, function($a, $b){
  return strtotime($a['end_date'] ?? $a['start_date']) < strtotime($b['end_date'] ?? $b['start_date']) ? -1 : 1;
});
// Filter only past events
$past = array_filter($events, function($e){
  return strtotime($e['end_date'] ?? $e['start_date']) < time();
});
// Sort chronological newest to oldest
usort($past, function($a, $b){
  return strtotime($a['end_date'] ?? $a['start_date']) < strtotime($b['end_date'] ?? $b['start_date']) ? 1 : -1;
});

function show_event($event) {
  ?>
  <div class="h-event event">
    <div class="name"><a href="<?= $event['url'] ?>" class="u-url p-name"><?= e($event['name']) ?></a></div>
    <div>
      <?php if(isset($event['end_date'])): ?>
        <time class="dt-start" datetime="<?= e($event['start_date']) ?>"><?= date('F j -', strtotime($event['start_date'])) ?></time>
        <time class="dt-end" datetime="<?= e($event['end_date']) ?>"><?= date('j, Y', strtotime($event['end_date'])) ?></time>
      <?php else: ?>
        <time class="dt-start" datetime="<?= e($event['start_date']) ?>"><?= date('F j, Y', strtotime($event['start_date'])) ?></time>
      <?php endif ?>
    </div>
    <div class="p-location"><?= e($event['location']) ?></div>
    <div class=""><a href="<?= $event['url'] ?>"><?= parse_url($event['url'], PHP_URL_HOST) ?></a></div>
  </div>
  <?php
}

?>

  <div class="container">

    <div>
      <h2>OAuth Events</h2>

      <?php
      foreach($upcoming as $event) {
        show_event($event);
      }
      ?>

      <p>See also: <a href="/workshop/">OAuth Security Workshop</a></p>

    </div>
    <div>
      <h3>Past Events</h3>

      <?php
      foreach($past as $event) {
        show_event($event);
      }
      ?>

    </div>

  </div>

<?php require('../includes/_footer.php'); ?>
