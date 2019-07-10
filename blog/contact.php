<?php
include 'includes/header.php';

// if (!isset($_SESSION['id'])) {
//   echo '<script>alert(\'please login\')';
//   echo '</script>';
//   echo '<script>';
//   echo 'location.replace(\'http://localhost:8080\')';
//   echo '</script>';
// }

?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('img/contact-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="page-heading">
          <h1>Contact Me</h1>
          <span class="subheading">Have questions? I have answers.</span>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
      <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
      <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
      <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
      <form name="register" id="contactForm" method="post" action="process/register.php">
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Name" name="name" required data-validation-required-message="Please enter your name.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Email Address</label>
            <input type="email" class="form-control" placeholder="Email Address" name="email" required data-validation-required-message="Please enter your email address.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Username</label>
            <input type="text" class="form-control" placeholder="Username" name="username" required data-validation-required-message="Please enter username.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>password</label>
            <input type="password" class="form-control" placeholder="Password" name="pword" required data-validation-required-message="Please enter your password.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <br>
        <div id="success"></div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" name="submit">Create</button>
        </div>
      </form>
    </div>
  </div>
</div>

<hr>

<!-- Footer -->
<?php include 'includes/footer.php';
