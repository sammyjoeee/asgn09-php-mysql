<?php 
require_once('../../../private/initialize.php'); ?>

<?php
  $subjects = [
    ['id' => '1', 'position' => '1', 'visible' => '1', 'salamanderName' => 'Red-Legged Salamander'],
    ['id' => '2', 'position' => '2', 'visible' => '1', 'salamanderName' => 'Pigeon Mountain Salamander'],
    ['id' => '3', 'position' => '3', 'visible' => '1', 'salamanderName' => 'ZigZag Salamander'],
    ['id' => '4', 'position' => '4', 'visible' => '1', 'salamanderName' => 'Slimy Salamander'],
  ];
?>

<?php $page_title = 'Subjects'; ?>
<?php include(SHARED_PATH . '/salamanderHeader.php'); ?>
<div id="content">
  <div class="subjects listing">
  <h1>Subjects</h1>

<div class="actions">
  <a class="action" href="<?= url_for('/salamanders/subjects/new.php'); ?>">Create New Salamander</a>
</div>

<table class="list">
  <tr>
    <th>ID</th>
    <th>Position</th>
    <th>Visible</th>
    <th>Name</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>

  <?php foreach($subjects as $subject) { ?>
    <tr>
      <td><?= h($subject['id']); ?></td>
      <td><?= h($subject['position']); ?></td>
      <td><?= $subject['visible'] == 1 ? 'true' : 'false'; ?></td>
      <td><?= h($subject['salamanderName']); ?></td>
      <td><a class="action" href="<?= url_for('/salamanders/subjects/show.php?id=' . h(u($subject['id']))); ?>">View</a></td>
      <td><a class="action" href="<?= url_for('/salamanders/subjects/edit.php?id=' . h(u($subject['id']))); ?>">Edit</a></td>
      <td><a class="action" href="">Delete</a></td>
    </tr>
  <?php } ?>
</table>

</div>

</div>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>
