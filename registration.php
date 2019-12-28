<?php
session_start();
include "config.php";//Uses the config.php file to  connect to databse

$name = $_POST['Username'];//Declares  username to $name variable
$pass= $_POST['Password'];//Delcares Password to $pass variable
$fname = $_POST['FirstName'];//Declares FirstName to $fname variable
$lname = $_POST['LastName'];//Declares LastName to $lname variable
$EAdress = $_POST['EmailAddress'];//Declares EmailAddress to $EAdress variable


$s = "SELECT * FROM users WHERE Username = '$name'";//Selects for user database table called user where the function Username is eqaul to $name

$result = mysqli_query($connection, $s);


if(mysqli_num_rows($result) > 0){//Checks to see if username already exists, if exisits than a pop out message will display saying they username unavailable and once the user clicks okay it will redirect the user to the register.php page
  $message = "Username unavailable.";
  echo "<script type='text/javascript'>alert('$message'); window.location.href = 'register.php'</script>";
  echo '</html>';
}
else{
  $reg = "INSERT into users(Username, Password, FirstName, LastName, EmailAddress) VALUES ('$name', '$pass', '$fname', '$lname', '$EAdress')";// If the username has not been used before than it will store all the data the user inputted into the databse and it will prompt a message saying Registration sucessful and once the user clicks okay it will redirect the user to the login page
  mysqli_query($connection, $reg);
  $_SESSION['FirstName'] = $fname; 
    $_SESSION['LastName'] = $lname;
  $message = "Registration successful.";
  echo "<script type='text/javascript'>alert('$message'); window.location.href = 'login.php'</script>";
}
?>
