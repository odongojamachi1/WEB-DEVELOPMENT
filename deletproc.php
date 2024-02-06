<?php
session_start();
require_once "connect.php"; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['UserName'])) {
    // Assuming UserName is the unique identifier for the user
    $UserName = $_GET['UserName'];

   $query = "DELETE FROM register WHERE UserName='$UserName'";
    mysqli_query($connect, $query);

    // Redirect back to the main page with a success message
    header("Location: index.php?delete=success");
    exit();
} else {
    // Redirect to the main page if accessed directly without proper parameters
    header("Location: deletproc.php");
    exit();
}
?>
