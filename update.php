<?php
require_once 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['UserName'];
    $UserName = $_POST['UserName'];
    $phone = $_POST['phone'];
    $amount = $_POST['amount'];


    $query = "UPDATE register SET UserName=?, phone=?, amount=? WHERE UserName=?";
    $stmt = mysqli_prepare($connect, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $UserName, $phone, $amount, $UserName);
    

    if (mysqli_stmt_execute($stmt)) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . mysqli_error($connect);
    }


    mysqli_stmt_close($stmt);
}


$UserName = $_GET['UserName'];

$query = "SELECT * FROM register WHERE UserName=?";
$stmt = mysqli_prepare($connect, $query);
mysqli_stmt_bind_param($stmt, "i", $UserName);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);
mysqli_stmt_close($stmt);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
</head>
<body>
    <h2>Edit Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="hidden" name="UserName" value="<?php echo $row['UserName']; ?>">
        <p> <label for="UserName">User Name:</label>
      <input type="text" name="UserName" value="<?php echo $row['UserName']; ?>"></p> 

        <p><label for="phone">Phone Number:</label>
        <input type="text" name="phone" value="<?php echo $row['phone']; ?>"></p>

        <p><label for="amount">Amount:</label>
        <input type="text" name="amount" value="<?php echo $row['amount']; ?>"></p>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
mysqli_close($connect);
?>
