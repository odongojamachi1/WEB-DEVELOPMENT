
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Records</title>
    <style>
#video-background {
      position: fixed;
      top: 50%;
      left: 50%;
      min-width: 100%;
      min-height: 100%;
      width: auto;
      height: auto;
      z-index: -100;
      transform: translateX(-50%) translateY(-50%);
      background: url(poster.jpg) no-repeat;
      background-size: cover;
    }

body {
    color: white;
}
</style>

</head>

<?php
session_start();
require_once "connect.php"; // Include your database connection file

// Function to retrieve user records
function retrieveRecords($connect) {
    $records = array();
    $query = "SELECT * FROM register";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $records[] = $row;
        }
    }
    return $records;
}

// Function to update user record
function updateRecord($connect, $UserName, $service, $phone, $amount) {
    $query = "UPDATE register SET service='$service', phone='$phone', amount='$amount' WHERE UserName='$UserName'";
    mysqli_query($connect, $query);
}

// Function to delete user record
function deleteRecord($connect, $UserName) {
    $query = "DELETE FROM register WHERE UserName='$UserName'";
    mysqli_query($connect, $query);
}

// Check if the form for updating record is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    // Assuming UserName is the unique identifier for the user
    $UserName = $_POST['UserName'];
    $service = $_POST['service'];
    $phone = $_POST['phone'];
    $amount = $_POST['amount'];

    updateRecord($connect, $UserName, $service, $phone, $amount);
    header("Location: index.php?update=success");
    exit();
}

// Check if the delete link is clicked
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['delete'])) {
    // Assuming UserName is the unique identifier for the user
    $UserName = $_GET['UserName'];
    deleteRecord($connect, $UserName);
    header("Location: register.php?delete=success");
    exit();
}

// Retrieve records
$records = retrieveRecords($connect);
?>

<body>
<a class="nav-link" href="SIGN-IN.php">EXIT</a>
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>WANMIC TECHNOLOGIES </h1>
  <p>we innovate technology</p> 
</div>

<div class="container-fluid" style="max-height: 1000px; overflow: auto;">
    <div class="row">
        <div class="col-md-3 col-lg-2" style="border-left:2px solid white;">
            <div class="col-lg-8 col-md-6 mt-2">
                <h3 class="my-4 text-center">User Records</h3>
                <?php
                if (isset($_GET["update"]) && $_GET["update"] == "success") {
                    echo '<div class="text-center alert alert-warning mt-3" role="alert">
                                    Data updated successfully!
                                </div>';
                }

                if (isset($_GET["delete"]) && $_GET["delete"] == "success") {
                    echo '<div class="text-center alert alert-danger mt-3" role="alert">
                                    Data deleted successfully!
                                </div>';
                }
                ?>
            </div>
            <div class="row">
                <table class="table table-bordered table-striped">
                    <thead class="thead-light">
                    <tr>
                        <th>UserName</th>
                        <th>Service</th>
                        <th>Phone</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($records as $record) { ?>
                        <tr>
                            <td><?php echo $record['UserName']; ?></td>
                            <td><?php echo $record['service']; ?></td>
                            <td><?php echo $record['phone']; ?></td>
                            <td><?php echo $record['amount']; ?></td>
                            <td>
                                <form method="POST" action="index.php">
                                    <input type="hidden" name="UserName" value="<?php echo $record['UserName']; ?>">
                                    <input type="text" name="service" value="<?php echo $record['service']; ?>">
                                    <input type="text" name="phone" value="<?php echo $record['phone']; ?>">
                                    <input type="text" name="amount" value="<?php echo $record['amount']; ?>">
                                    <button type="submit" name="update">Update</button>
                                </form>
                                <a href="index.php?delete&UserName=<?php echo $record['UserName']; ?>"
                                   onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<video id="video-background" autoplay loop muted>
  <source src="72.mp4" type="video/mp4">
</body>
</html>
