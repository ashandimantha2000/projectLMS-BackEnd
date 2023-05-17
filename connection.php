<?php
$servername = "localhost"; //serverHost
$username = "esp32";
$password = "microcontrollerslab@123";
$dbname = "lms_app"; //database

$conn = mysqli_connect($servername, $username, $password, $dbname); //connectNow variable
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else
{
    echo("localhost successfully connectedddddd");
}

?> 


