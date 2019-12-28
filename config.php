<?php
$dbhost="localhost:3308";//Name of the localhost and port that was being used
$dbuser="root";//Username
$dbpass="";//password
$dbname="nba_allstar";//Database name
$connection= mysqli_connect ($dbhost,$dbuser,$dbpass,$dbname);//Variables used in the php
if (mysqli_connect_errno()){
die("Database connection failed: " . mysqli_connect_error().//Displays error message if database is not sucessfully connected
"(" . mysqli_connect_errno() . ")");
}
?>
