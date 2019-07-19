<?php
include_once __DIR__ . '/db/connection.php';
include_once __DIR__ . '/process/functions.php';
// retrieve data URL
if (
  !isset($_GET['artID']) ||
  !is_numeric($_GET['artID'])
) {
  header('Location: http://localhost:8080/dashboard.php');
}

$articleId = $_GET['artID'];
// alert confirm to proceed, otherwise return dashboard
delete($conn, $articleId); //delete article
header('Location: http://localhost:8080/dashboard.php');
