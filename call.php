<?php
  include_once './php_partials/db.php';
  header('Content_type: application/json');
  echo json_encode($database);
 ?>
