<?php require_once('../../private/initialize.php'); ?>

<?php
  $salamanders = [
    ['id' => '1', 'position' => '1', 'visible' => '1', 'salamanderName' => 'Red-Legged Salamander'],
    ['id' => '2', 'position' => '2', 'visible' => '1', 'salamanderName' => 'Pigeon Mountain Salamander'],
    ['id' => '3', 'position' => '3', 'visible' => '1', 'salamanderName' => 'ZigZag Salamander'],
    ['id' => '4', 'position' => '4', 'visible' => '1', 'salamanderName' => 'Slimy Salamander'],
  ];
?>

<?php $page_title = 'Salamanders'; ?>
<?php include(SHARED_PATH . '/salamanderHeader.php'); ?>
<div id="content">
  <div class="pages listing">
    <h1>Salamanders</h1>

    <div class="actions">
      <a class="action" href="">Create Salamander</a>
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

      <?php foreach($salamanders as $salamander) { ?>
        <tr>
          <td><?= h($salamander['id']); ?></td>
          <td><?= h($salamander['position']); ?></td>
          <td><?= $salamander['visible'] == 1 ? 'true' : 'false'; ?></td>
    	    <td><?= h($salamander['salamanderName']); ?></td>
          <td><a class="action" href="<?= url_for('salamanders/show.php?id=' . h(u($salamander['id']))); ?>">View</a></td>
          <td><a class="action" href="">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>
