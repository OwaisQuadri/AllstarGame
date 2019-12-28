<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>NBA Fantasy | Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/stylesheet.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block">
            <div class="text-center">
              <img src="fantasy.png">
            </div>
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form action="registration.php" class="user" method="post" enctype="multiport/form-data">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="FirstName" placeholder="First Name" required><!--User must input first name in this textbox  --> 
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="LastName" placeholder="Last Name" required><!--User must input last nae in this textbox --> 
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="EmailAddress" placeholder="Email Address" required><!--User must input Email Adresss in this textbox --> 
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="Username" placeholder="Username" required> <!--User must input Username in this textbox --> 
                  </div> <
 
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="Password" placeholder="Password" required><!--User must input Password in this textbox --> 
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block"><!--If the user has inputed a value in all the required fields above then the sugmit buton will call to the databse if not then user will be prompt to which field thwey have not submitted--> 
                  Register Account
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a><!--Hyper Text link to if user already has an account this link will direct them to the login page --> 
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
