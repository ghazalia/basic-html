<?php
include 'includes/header.php';

if (!isset($_SESSION['id'])) {
  echo '<script>alert(\'please login\')';
  echo '</script>';
  echo '<script>';
  echo 'location.replace(\'http://localhost:8080\')';
  echo '</script>';
}

?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('img/blog.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="page-heading">
          <h1>Post an article</h1>
          <span class="subheading"></span>
        </div>
      </div>
    </div>
  </div>
</header> <!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <p>Fill the form to create a post!</p>
      <form name="postForm" id="contactForm" method="post" action="process/createPost.php">
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Article Title</label>
            <input type="text" class="form-control" placeholder="Article title" name="title" required data-validation-required-message="Please enter the article title.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Blog Content</label>
            <textarea class="form-control" placeholder="Blog Content" name="content" rows="4" cols="50" required data-validation-required-message="Please enter article content."></textarea>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <br>
        <div id="success"></div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="submit">Create</button>
          <button type="reset" class="btn btn-primary" name="reset">Reset</button>
        </div>
      </form>
    </div>
  </div>
</div>

<hr>

<!-- Footer -->
<?php include 'includes/footer.php';
