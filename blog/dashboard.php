<?php
include_once 'includes/header.php';
include_once __DIR__ . '/db/connection.php';
include_once __DIR__ . '/process/functions.php';
?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Clean Blog</h1>
          <span class="subheading">Dashboard</span>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="container">
  <div class="row">
    <table class="table table-striped">
      <thead class="table-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Date</th>
          <th scope="col">Utilities</th>
        </tr>
      </thead>
      <tbody>
        <!-- display results -->
        <?php
        $results = getArticlesByUser($conn, $_SESSION['id']);
        // var_dump($results);
        for ($i = 0; $i < count($results); $i++) {
          ?>
          <tr>
            <th scope="row"><?php echo $i + 1; ?></th>
            <td><?php echo $results[$i]['post_title']; ?></td>
            <td><?php echo date_format(date_create($results[$i]['post_date']), 'Y/m/d'); ?></td>
            <td>
              <a href="create-post.php?artID=<?php echo $results[$i]['id']; ?>" class="btn btn-primary" role="button">Update</a>
              <a href="delete.php?artID=<?php echo $results[$i]['id']; ?>" class="btn btn-danger" role="button">Delete</a>
            </td>
          </tr>
        <?php } ?>
        <!-- close for loop -->
      </tbody>
    </table>
  </div>
</div>