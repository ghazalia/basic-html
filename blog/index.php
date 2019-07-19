<?php
include_once 'includes/header.php';
include_once __DIR__ . '/db/connection.php';
include_once __DIR__ . '/process/functions.php';

$results = listArticles($conn);
?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Clean Blog</h1>
          <span class="subheading">A Blog Theme by Start Bootstrap</span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <?php
      if (isset($results)) :
        for ($i = 0; $i < count($results); $i++) {
          // echo 'id: ' . $results[$i]['id'] . ' ' . $results[$i]['username'] . '<br>';
          // http://localhost/dispatch.php?link=www.google.com
          ?>
          <div class="post-preview">
            <a href="post.php?id=<?php echo $results[$i]['id'] ?>">
              <h2 class="post-title">
                <?php echo $results[$i]['post_title']; ?>
              </h2>
              <!-- <h3 class="post-subtitle">
                                                                        Problems look mighty small from 150 miles up
                                                                      </h3> -->
            </a>
            <p class="post-meta">Posted by
              <?php echo $results[$i]['username']; ?>
              <!-- <a href="#">Start Bootstrap</a> -->
              on <?php echo date_format(date_create($results[$i]['post_date']), 'd M Y'); ?></p>
          </div>
          <hr>
          <!-- <div class="post-preview">
                        <a href="post.php">
                          <h2 class="post-title">
                            I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                          </h2>
                        </a>
                        <p class="post-meta">Posted by
                          <a href="#">Start Bootstrap</a>
                          on September 18, 2019</p>
                      </div>
                      <hr>
                      <div class="post-preview">
                        <a href="post.php">
                          <h2 class="post-title">
                            Science has not yet mastered prophecy
                          </h2>
                          <h3 class="post-subtitle">
                            We predict too much for the next year and yet far too little for the next ten.
                          </h3>
                        </a>
                        <p class="post-meta">Posted by
                          <a href="#">Start Bootstrap</a>
                          on August 24, 2019</p>
                      </div>
                      <hr>
                      <div class="post-preview">
                        <a href="post.php">
                          <h2 class="post-title">
                            Failure is not an option
                          </h2>
                          <h3 class="post-subtitle">
                            Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                          </h3>
                        </a>
                        <p class="post-meta">Posted by
                          <a href="#">Start Bootstrap</a>
                          on July 8, 2019</p>
                      </div>
                      <hr> -->
          <!-- Pager -->

        <?php } ?>
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      <?php endif;    ?>
    </div>
  </div>
</div>

<hr>

<!-- Footer -->
<?php include 'includes/footer.php'; ?>