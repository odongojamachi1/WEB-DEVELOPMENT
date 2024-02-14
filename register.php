<!DOCTYPE html>
<html lang="en">
<head>
  <title>oder now</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
include "style.php";
?>
<body>
<?php
include "nav.php";
?>
    
        <p><div class="container">
    <form id="loginForm" action="proccess.php" method="post">
        <div class="form-control">
            <label for="text">UserName:</label>
            <input type="text" id="UserName" name="UserName" placeholder="Enter your UserName" required>
        </div>

        <div class="form-control">
            <label for="text">service:</label>
            <input type="text" id="service" name="service" placeholder="service" required>
        </div>

        <div class="form-control">
            <label for="number">phone:</label>
            <input type="number" id="phone" name="phone" placeholder="phone" required>
        </div>

        <div class="form-control">
            <label for="text">amount:</label>
            <input type="text" id="amount" name="amount" placeholder="amount" required>
        </div>

        <div class="form-control">
            <input type="checkbox" id="remindMe" name="remindMe">
            <label for="remindMe">Remind me</label>
        </div>
        <input type="submit" value="Login">
    </form>

    
<video id="video-background" autoplay loop muted>
  <source src="72.mp4" type="video/mp4">
</div></p>
    </div>
    </body>
    </html>