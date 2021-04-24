<?php
$page_title = "Code &mdash; OAuth";
$page_section = "code";
$page_secondary = "";
$page_meta_description = "";

require('../../includes/_header.php');

// These are sorted by the fetch-status.php script already
$specs = json_decode(file_get_contents(__DIR__.'/../../data/specs/data/specs.json'), true);

function display_draft($draft) {
  $filename = __DIR__.'/../../data/specs/drafts/'.$draft.'/status.json';
  if(!file_exists($filename)) {
    echo '<tr><td>'.$draft.'</td><td>Could not find file</td></tr>';
    return;
  }

  $status = json_decode(file_get_contents($filename), true);

  ?>
  <tr>
    <td>
      <b><?= htmlspecialchars($status['title']) ?></b>
      <br>
      <?php
        if(isset($status['rfc'])) {
          echo '<a href="https://tools.ietf.org/html/rfc' . $status['rfc'] . '">'
            . 'RFC ' . $status['rfc']
            . '</a>';
        } else {
          echo '<a href="https://tools.ietf.org/html/' . $draft . '">'
            . $draft . (isset($status['version']) ? '-' . $status['version'] : '')
            . '</a>';
        }
      ?>
      <br>
      <?php
        $draftStatus = trim(preg_replace('/RFC [0-9]+/', '', $status['status']), '() ');
        if(!in_array($draftStatus, ['I-D Exists', 'Proposed Standard'])) {
          echo htmlspecialchars($draftStatus);
        }
      ?>
    </td>
    <td width="100">
      <nobr><?= $status['last_revised_date'] ?></nobr>
    </td>
  </tr>
  <?php
}

?>
<style>
table.rfcs {
  width: 100%;
}
table.rfcs td {
  padding: 8px;
  vertical-align: top;
  border-top: 1px #ddd solid;
}
table.rfcs tr:nth-child(odd) {
  background: #eee;
}
</style>
<div class="container">
  <div>

    <h2>OAuth Working Group Specifications</h2>

    <p>Current active drafts in the OAuth working group</p>

    <h3>Active Drafts</h3>

    <table class="rfcs">
      <?php
      foreach($specs['drafts'] as $spec) {
        display_draft($spec);
      }
      ?>
    </table>
    <br><br>

    <h3>Active Individual Drafts</h3>

    <table class="rfcs">
      <?php
      foreach($specs['individuals'] as $spec) {
        display_draft($spec);
      }
      ?>
    </table>
    <br><br>

    <h3>RFCs</h3>

    <table class="rfcs">
      <?php
      foreach($specs['rfcs'] as $spec) {
        display_draft($spec);
      }
      ?>
    </table>


  </div>
</div>
<?php require('../../includes/_footer.php'); ?>
