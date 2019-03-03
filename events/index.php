<?php
$page_title = "OAuth Events &mdash; OAuth";
$page_section = "events";
$page_secondary = "";
$page_meta_description = "";

require('../includes/_header.php');

$events = [];

$files = glob(__DIR__.'/data/*.json');
foreach($files as $f) {
  $event = json_decode(file_get_contents($f), true);
  $event['slug'] = preg_replace('/\.json$/', '', basename($f));
  $events[] = $event;
}


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
    <div class="name"><a href="<?= $event['url'] ?>" class="p-name"><?= e($event['name']) ?></a></div>
    <div>
      <?php if(isset($event['end_date'])): ?>
        <time class="dt-start" datetime="<?= e($event['start_date']) ?>"><?= date('F j -', strtotime($event['start_date'])) ?></time>
        <time class="dt-end" datetime="<?= e($event['end_date']) ?>"><?= date('j, Y', strtotime($event['end_date'])) ?></time>
      <?php else: ?>
        <time class="dt-start" datetime="<?= e($event['start_date']) ?>"><?= date('F j, Y', strtotime($event['start_date'])) ?></time>
      <?php endif ?>
    </div>
    <div class="p-location"><?= e($event['location']) ?></div>
    <div class=""><a href="<?= $event['url'] ?>" class="u-url"><?= parse_url($event['url'], PHP_URL_HOST) ?></a></div>
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
