<?php
session_start();
include __DIR__ . '/../db/connection.php';


$uname = $_POST['username'];
$pword = md5($_POST['pword']);

$sql = 'Select id From users Where username = ? and password = ?';

if ($stmt = $conn->prepare($sql)) {
  $stmt->bind_param('ss', $uname, $pword);
  $stmt->execute();
  $stmt->bind_result($id);
  $stmt->fetch();

  if ($id) {
    $_SESSION['id'] = $id;
    header('Location: http://localhost:8080/create-post.php');
  } else {
    header('Location: http://localhost:8080/login.php');
  }
} else {
  // error
  echo 'error';
}
