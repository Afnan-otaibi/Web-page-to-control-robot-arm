<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "robot-arm";

// Create connection
$conn = mysqli_connect($host, $user, $pass, $db);
// Check connection
if ($conn) {
  echo("Connection succeeded");
  }
else
{
echo("error");
}


?>