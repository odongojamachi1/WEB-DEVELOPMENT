<?php
session_start();
require_once "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $UserName = $_POST['UserName']; 

     $service = $_POST['service'];
   $phone = $_POST['phone'];
    $amount = $_POST['amount'];

  
   $query = "UPDATE register SET service='$service', phone='$phone', amount='$amount' WHERE UserName='$UserName'";
   
   mysqli_query($connect, $query);

    
    header("Location: index.php?update=success");
    exit();
} else {
    // Redirect to the main page if accessed directly without POST method
    header("Location: retreve.php");
    exit();
}
?>
