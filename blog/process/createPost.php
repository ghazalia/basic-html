<?php
session_start();
include __DIR__ . '/../db/connection.php';


$title = $_POST['title'];
$content = $_POST['content'];
$authorid = $_SESSION['id'];
$post_date = date("Y-m-d H:i:s", time());

$sql = 'Insert into posts (post_author, post_date, post_title, post_content) ';
$sql .= 'Values(?,?,?,?)';

if ($stmt = $conn->prepare($sql)) {
  $stmt->bind_param('isss', $authorid, $post_date, $title, $content);
  $stmt->execute();

  if ($stmt->affected_rows) {
    header('Location: http://localhost:8080');
  } else {
    header('Location: http://localhost:8080/login.php');
  }
} else {
  // error
  echo 'error';
}
