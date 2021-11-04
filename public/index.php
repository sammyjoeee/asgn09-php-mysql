<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Home'; ?>
<?php include(SHARED_PATH . '/salamanderHeader.php'); ?>

<div id="content">
  <h1>Main Menu</h1>
  <ul>
  <li><a href="<?php echo url_for('/salamanders/subjects/index.php'); ?>">Subjects</a></li>
    <li><a href="salamanders">Salamanders</li>
  </ul>
</div>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>
