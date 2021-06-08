<?php 
  include __DIR__ . '/data/db.php';
  header('Content-Type: application/json'); // devo specificare il tipo
  echo json_encode($database);
?>