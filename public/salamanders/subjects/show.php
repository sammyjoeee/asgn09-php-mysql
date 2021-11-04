<?php require_once('../../../private/initialize.php'); ?>

<?php
// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? '1'; // PHP > 7.0
?>

<?php $page_title = 'Show Subject'; ?>
<?php include(SHARED_PATH . '/salamanderHeader.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/salamanders/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject show">

    Page ID: <?php echo h($id); ?>

  </div>

</div>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>
