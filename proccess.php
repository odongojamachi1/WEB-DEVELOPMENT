





<?php
require_once("connect.php");

// Check if all required fields are set
if(isset($_POST["UserName"], $_POST["service"], $_POST["phone"], $_POST["amount"])) {
    // Prepare the query
    $query = "INSERT INTO register (UserName, service, phone, amount) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($connect, $query);

    if (!$stmt) {
        die("prepare failed: " . mysqli_error($connect));
    }

    // Escape and bind parameters
    $UserName = mysqli_real_escape_string($connect, $_POST["UserName"]);
    $service = mysqli_real_escape_string($connect, $_POST["service"]);
    $phone_number = mysqli_real_escape_string($connect, $_POST["phone"]);
    $amount_paid = mysqli_real_escape_string($connect, $_POST["amount"]);
    mysqli_stmt_bind_param($stmt, "ssss", $UserName, $service, $phone_number, $amount_paid);

    // Execute the statement
    if(mysqli_stmt_execute($stmt)) {
        echo "Data inserted successfully.";
    } else {
        die("Failed to insert: " . mysqli_error($connect));
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo "Please fill all required fields.";
}
?>
<a class="nav-link" href="index.php">EXIT</a>