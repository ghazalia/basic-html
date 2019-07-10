<?php
$user = 'root';
$host = 'localhost';
$password = '';
$dbName = 'blog';

$conn = new mysqli($host, $user, $password, $dbName);

if ($conn->connect_errno) {
  echo 'Database error: ' . $conn->connect_errno;
  exit;
}
