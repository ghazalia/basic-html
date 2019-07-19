<?php

function listArticles($conn)
{
  $sql = 'Select b.id, u.username, b.post_title, b.post_author, b.post_date from posts b ';
  $sql .= 'Inner Join users u on b.post_author = u.id';

  // get results
  $resultset = $conn->query($sql);

  //check resultset
  if ($resultset->num_rows > 0) {
    // process $resultset
    $results = $resultset->fetch_all(MYSQLI_ASSOC); //associative array, our data
    var_dump($results);
    echo '<br>';
    echo 'number of rows: ' . count($results) . '<br>';
    for ($i = 0; $i < count($results); $i++) {
      echo 'id: ' . $results[$i]['id'] . ' ' . $results[$i]['username'] . '<br>';
    }
  } else {
    echo 'no data';  // return
  }
}
