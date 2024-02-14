<?php
$hostname = "localhost";
$user = "root";
$password = "";
$dbname = "wanmic";

$connect = mysqli_connect($hostname, $user, $password, $dbname);

if (!$connect) {
   die("connection failed: " . mysqli_connect_error());

}
else
echo"success"
?>







