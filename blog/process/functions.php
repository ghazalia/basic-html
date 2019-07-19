<?php

// index list articles

function listArticles($conn)
{
  $sql = 'Select b.id, u.username, b.post_title, b.post_author, b.post_date from posts b ';
  $sql .= 'Inner Join users u on b.post_author = u.id ORDER BY b.post_date desc';

  // get results
  $resultset = $conn->query($sql);

  //check resultset
  if ($resultset->num_rows > 0) {
    // process $resultset
    $results = $resultset->fetch_all(MYSQLI_ASSOC); //associative array, our data
    return $results;
  } else {
    return;  // no data
  }
}

// read 1 article
function listArticle($conn, $id)
{
  $sql = 'Select b.id, u.username, b.post_title, b.post_content, b.post_date from posts b ';
  $sql .= 'Inner Join users u on b.post_author = u.id ';
  $sql .= 'Where b.id = ?';

  //init statement
  if ($stmt = $conn->prepare($sql)) {
    //bind parameters
    $stmt->bind_param('i', $id);
    $stmt->execute();

    //bind result
    // $stmt->bind_result($id, $username, $p_title, $p_content, $p_author, $p_date);

    // while ($stmt->fetch()) {
    //   echo $id . ' ' . $username . ' ' . $p_title . ' ' . $p_content . ' ' . $p_author
    //     . ' ' . $p_date;
    // }

    //  return more than 1 columns & 1 row
    $resultset = $stmt->get_result();
    $results = $resultset->fetch_assoc();
    return $results;
    // var_dump($results);
  }
  return;
}

// get all articles by user id
function getArticlesByUser($conn, $id)
{
  $sql = 'SELECT id, post_title, post_date from posts ';
  $sql .= 'WHERE post_author=?';

  // process data
  if ($stmt = $conn->prepare($sql)) {
    // bind parameters
    $stmt->bind_param('i', $id);
    // execute
    $stmt->execute();
    // fetch data
    $resultset = $stmt->get_result();
    $results = $resultset->fetch_all(MYSQLI_ASSOC);
    // return data
    return $results;
  }
  return; //prepare fail
}

// delete article using id
function delete($conn, $articleID)
{
  // sql to delete
  $sql = 'Delete from posts Where id = ?';

  //prepare statement
  if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param('i', $articleID);
    $stmt->execute();
  }
  $stmt->close();
  $conn->close();
}

// get post by id
function getPostById($conn, $articleid)
{
  $sql = 'SELECT post_title, post_content from posts ';
  $sql .= 'WHERE id = ?';

  // process data
  if ($stmt = $conn->prepare($sql)) {
    // bind parameters
    $stmt->bind_param('i', $articleid);
    // execute
    $stmt->execute();
    // fetch data
    $resultset = $stmt->get_result();
    $results = $resultset->fetch_assoc();
    // return data
    return $results;
  }
  return; //prepare fail
}

// update table post
function updateTablePost($conn, $title, $content, $artId)
{
  // sql
  $sql = 'Update posts Set post_title = ?, post_content = ? ';
  $sql .= 'WHERE id = ?';

  // prepared statement
  if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param('ssi', $title, $content, $artId);
    $stmt->execute();
  }
  $stmt->close();
  $conn->close();
}
