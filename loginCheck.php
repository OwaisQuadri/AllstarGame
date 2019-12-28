<?php
  session_start();

  include 'config.php';//Connects to databse

  $name = $_POST['user'];//Asgin user to variable $name
  $pass = $_POST['password'];//Assgin password to variable $pass
  
  $s = " SELECT * FROM users WHERE Username ='$name'  && Password = '$pass'";//Selects form databse table called users where they see if the Username and Password exist 

  $result = mysqli_query($connection, $s);

  while ($row = mysqli_fetch_array($result)) {//Session vairables created
    $_SESSION['FirstName'] = $row['FirstName'];
    $_SESSION['LastName'] = $row['LastName'];
    $_SESSION['Username'] = $row['Username'];
    $_SESSION['Password'] = $row['Password'];
  }

  if(mysqli_num_rows($result) > 0){//If username and password do not exist or dont match then the user will be direct to the index.php page
    header("location:index.php");
  }
  

  else {
    $message = "Invalid username or password.";//If usernamer and password do not match/exist then an Invalid username or password message will be displayed and once the user press the okay button they will be directed to the login.php page
    echo "<script type='text/javascript'>alert('$message');window.location.href = 'login.php'</script>";
} 
?>
