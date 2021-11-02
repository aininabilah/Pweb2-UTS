<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="Asset/IconUnsri.png">

  <!-- Bootstrap CSS -->
  <link href="Asset/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="Asset/IconUnsri.png">

  <title>Profile</title>
</head>

<body style="background-color:#D8BF68;font-family: Helvetica Neue; font-size: 20px;line-height: 30px;">
  <!--Carousel-->

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div style="height:350px;" class="carousel-item active">
        <img src="Asset/slide1new.jpg" class="d-block w-100" alt="...">
      </div>
      <div style="height:350px;" class="carousel-item">
        <img src="Asset/slide2.jpg" class="d-block w-100" alt="...">
      </div>
      <div style="height:350px;" class="carousel-item">
        <img src="Asset/slide3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- end crousel -->

  <!--navbar-->
  <nav style="background-color:#A7871C;border-bottom-left-radius:30px;border-bottom-right-radius:30px;" class="navbar navbar-light ">
  <form style="margin-left:85%;" class="container-fluid justify-content-start">
  <a href=logout.php> <button class="btn btn-sm btn-danger" type="button">Logout</button></a>
  </form>
</nav>
<!--end navbar-->

<!--card-->
<div style="width:60%;margin:auto;margin-top:5%;border-radius:30px;margin-bottom:5%;"class="card text-center">
  <div class="card-header">
    Informasi Akun
  </div>
  <div class="card-body">
    <h5 class="card-title">Selamat Datang <?= $_SESSION['name'] ?>! </h5>
    <p class="card-text"></p>
    <a style="margin-right:7%;" href=profile.php> <button  style="text-align:center;margin-left:7%;width:130px;" class="btn btn-sm btn-primary" type="button">Profile</button></a>
  </div>
  
</div>
<!--end card-->

 <!--start footer-->
 <div style="background-color: #A7871C; border-top-right-radius:50px; border-top-left-radius:50px; color:white;padding:2%;" class="footerr">
    <footer class="text-center text-lg-start">
      <div class="row text-center pt-2">
        <!-- Copyright -->
        <div class="text-center p-1">
          © 2021 Copyright: By Kelompok 18
        </div>
        <!-- Copyright -->
    </footer>
  </div>
  <!-- end Footer -->
    
</body>
</html>