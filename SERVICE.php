<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>SERVICE</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style> 
        .newspaper {
          column-count: 3;
        }
        </style>
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
         
              </style>
</head>
    <body>
    
  
    <div class="row">
        
  
    <?php
         include "nav.php";
         ?>
      </div>

      <div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>WANMIC TECHNOLOGIES </h1>
  <p>we innovate technology</p> 
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3 style="color:white;">Computer programing</h3>
      <p style="color:white;">mobile application development.</p>
      <p style="color:white;">web development and design.</p>
      <p style="color:white;">Data management system.</p>
    </div>
    <div class="col-sm-4">
      <h3 style="color:white;">Networkig services</h3>
      <p style="color:white;">wireless networking</p>
      <p style="color:white;">Cabeling networking</p>
      <p style="color:white;">Remote networking</p>
    </div>
    <div class="col-sm-4">
      <h3 style="color:white;">Computer repairs & maintenance</h3>        
      <p style="color:white;">Personal computers</p>
      <p style="color:white;">Super computers</p>
      <!-- <p style="color:white;">Mainframe computers</p> -->
    </div>
  </div>
</div>





          <?php
        include "footer.php";
        ?>














<video id="video-background" autoplay loop muted>
  <source src="70.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>

<link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">

</body>
</html>