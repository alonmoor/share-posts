<?php require VIEW_DIR . '/inc/header.php'; ?>
  <h1><?php echo $data['title']; ?></h1>
  <p><?php echo $data['description']; ?></p>
  <p><?php echo $data['name']; ?></p>
  <p>Version: <strong><?php echo APPVERSION; ?></strong></p>
<?php require VIEW_DIR.'/inc/footer.php'; ?>
