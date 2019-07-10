<?php include 'includes/header.php'; ?>
<!-- Main Content -->
<header class="masthead" style="background-color: rgb(66, 230, 245);">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="page-heading">
          <h1>Login</h1>
          <span class="subheading">Login to create a post.</span>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <form name="login" id="login" method="post" action="process/plogin.php">
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
          <button type="submit" class="btn btn-primary" name="submit">Login</button>
          <button type="reset" class="btn btn-primary" name="reset">Reset</button>
        </div>
      </form>
    </div>
  </div>
</div>

<hr>

<?php include 'includes/footer.php';
