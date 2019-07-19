<?php
session_start();
include_once __DIR__ . '/../db/connection.php';
include_once __DIR__ . '/functions.php';

if (!isset($_SESSION['id'])) {
  echo '<script>alert(\'please login\')';
  echo '</script>';
  echo '<script>';
  echo 'location.replace(\'http://localhost:8080\')';
  echo '</script>';
}

// check button cancel
if (isset($_POST['cancel'])) {
  header('Location: http://localhost:8080/dashboard.php');
}

// get post data
$title = $_POST['title'];
$content = $_POST['content'];
$artId = $_POST['artId'];

//process update
updateTablePost($conn, $title, $content, $artId);
header('Location: http://localhost:8080/dashboard.php');
