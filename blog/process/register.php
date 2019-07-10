<?php
include __DIR__ . '/../db/connection.php';

$uname = $_POST['username'];
$name = $_POST['name'];
$registered = date('y/m/d');
$pword = md5($_POST['pword']);
$email = $_POST['email'];

echo $pword . '<br>';
$sql = 'Insert into users (name, username, password, email, registered)'; //column
$sql .= 'Values(?,?,?,?,?)';

$stmt = $conn->stmt_init();

if ($stmt->prepare($sql)) {
  $stmt->bind_param('sssss', $name, $uname, $pword, $email, $registered);
  $stmt->execute();
  if ($stmt->affected_rows) {
    echo 'data inserted';
  } else {
    echo 'data not inserted';
  }
  $stmt->close();
} else {
  echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
  exit;
}
