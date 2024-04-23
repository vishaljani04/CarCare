<?php

session_start();

if (isset($_SESSION['email']) && $_SESSION['password'] !== true) {
    // Redirect to home page or other authorized page
    header("Location: home.php");
    exit();
}


?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Login</title>
  <!-- base:css -->
  <link rel="stylesheet" href=" vendors/typicons/typicons.css">
  <link rel="stylesheet" href=" vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href=" css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href=" images/BMU.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
              <h4>Car Care</h4>
              </div>
              <h6 class="font-weight-light">Sign in to continue.</h6>


              <form class="pt-3" action="logindata.php" method="POST">
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="Login">Submit</button>
                  <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="Login">SIGN IN</a> -->
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <a href="admin_forget.php" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.php" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src=" vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src=" js/off-canvas.js"></script>
  <script src=" js/hoverable-collapse.js"></script>
  <script src=" js/template.js"></script>
  <script src=" js/settings.js"></script>
  <script src=" js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
