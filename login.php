<?php
  session_start();
  ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>NBA Fantasy | Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/stylesheet.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
                <div class="text-center">
                  <img src="fantasy.png" width="400" height="400">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1><!-- Main header for the loginsite-->
                  </div>
                  <form action="loginCheck.php" class="user" method="post" enctype="multiport/form-data">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="user" aria-describedby="userHelp" placeholder="Enter Username"><!-- Username textbox where user will input heir username-->
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Password"><!-- Password textbox where user will input their password-->
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">Login<!-- Login button which is to be used if the user has inputed all the require fields shown above-->
                </button>
                </form>
                <br>
                <div class="text-center">
                <a class="small" href="register.php">New to Fantasy? Sign up now!</a><!-- Hyperlink used  if the user has not created an account and wants to sign up which will direct to register.php page-->
              </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
