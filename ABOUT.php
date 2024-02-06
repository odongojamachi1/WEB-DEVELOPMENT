<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>ABOUT US</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


    <style>

/* h6 {
  background-image: url("47.png");
  background-size: ="contain";
}  */


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
    <body >
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
      <h3 style="color:white;">Work experience</h3>
      <p style="color:white;">WANMIC Innovatitve Technologies is a multi-disciplinary firm comprised of Information Technology engineers who have been operating in Uganda for over 3 years. we are located in kampala-Equtorial mall</p>
     
    </div>
    <div class="col-sm-4">
      <h3 style="color:white;">Services areas </h3>
      <p style="color:white;">Our services are reacheble in Central, Northern, western, and Eastern,part of Uganda. We are looking forward to push our services in the entir country. </p>
  
    </div>
    <div class="col-sm-4">
      <h3 style="color:white;">Relationship</h3>        
      <p style="color:white;">Our outstanding work has led to a large volume of repeat business through the years and continues to foster strong relationships with our clients and with professionals within the industry.</p>
     
      <!-- <p style="color:white;">Mainframe computers</p> -->
    </div>
  </div>
</div>

  





 <?php
include "footer.php";
?>

 <video id="video-background" autoplay loop muted>
  <source src="72.mp4" type="video/mp4">


 <?php
        include "footer.php";
        ?>









<link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">

</body>
</html>