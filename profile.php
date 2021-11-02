<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

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

  <?php
  //pemilihan
  if (!isset($_POST['submit'])) {
    $Nama = "Aini Nabilah";
    $Umur = "18 Tahun";
    $Alamat = "Jalan netar jaya No.73 Palembang";
    $Semester = "Tiga";
    $Jurusan = "Teknik Informatika (S1)";
    $Domisili = "Indralaya";
    $Gender = "Perempuan";
    $Bio = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam sapiente officiis
 sint quos nostrum delectus aliquid voluptates! Vero sequi fuga voluptatem doloremque, qui consectetur ipsum corrupti, necessitatibus earum illo pariatur?";
    $profil = "Asset/foto.jpg";
  } else {
    $Nama = $_POST['Nama'];
    $Umur = $_POST['Umur'];
    $Alamat = $_POST['Alamat'];
    $Semester = $_POST['Semester'];
    $Jurusan = $_POST['Jurusan'];
    $Domisili = $_POST['Domisili'];
    $Gender = $_POST['Gender'];
    $Bio = $_POST['Bio'];
    $profil = profil();
  }
//membuat fungsi
  function profil()
  {
    if (!$_FILES['profil']['name']) {
      $profil = "Asset/foto.jpg";
      return $profil;
    } else {
  //pengecekan apakah gambar atau bukan
      $check = getimagesize($_FILES["profil"]["tmp_name"]);
      if ($check !== false) {
        $namaFile = $_FILES['profil']['name'];
        $namaSementara = $_FILES['profil']['tmp_name'];
        $upld = "Asset/";
        $diUpload = move_uploaded_file($namaSementara, $upld . $namaFile);
        $profil = $upld . $namaFile;
        $upld = "Asset/";
        $namaFile = $_FILES['profil']['name'];
        $profil = $upld . $namaFile;
        $imageFileType = strtolower(pathinfo($profil, PATHINFO_EXTENSION));
  //pengecekan file bertipe JPG atau bukan
        if ($imageFileType !== "jpg") {
          echo '<div class="alert alert-danger" role="alert" style="text-align:center";>Sorry, Only JPG File </div >';
          $profil = "Asset/foto.jpg";
        }
  //pengecekan ukuran file tidak lebih dari 1MB
        if ($_FILES["profil"]["size"] > 100000) {
          echo '<div class="alert alert-danger" role="alert" style="text-align:center";>Sorry, Your File Size Is More Than 1 MB</div >';
          $profil = "Asset/foto.jpg";
        }
        return $profil;
      } else {
        echo '<div class="alert alert-danger" role="alert" style="text-align:center";>Sorry your file can not uploaded </div >';
        $profil = "Asset/foto.jpg";
        return $profil;
      }
    }
  }
  ?>

  <div style="padding:1%;font-size:25px;background-color:hsl(46, 72%, 47%,0.7);margin-top:4%;border-radius:40px;" class="container">
    <h1 style="text-align:center;">Profil Mahasiswa Fakultas Ilmu Komputer</h1>
    <hr size='7px' style="margin:auto;margin-bottom:4%;width:70%;">
    <div class="row">
      <div style="margin-top:6%;" class="col">
        <img style="border-radius:100px;height:400px;margin-left:15%;" src="<?php echo $profil ?>" alt="">

        <div class="card border-warning mb-3" style="width: 100%;background-color:#E4DBDB;margin-top:10%;margin-left:3%;">
          <div style="text-align:left;font-size:25px;" class="card-header"><b>Bio</b></div>
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"><?php echo $Bio ?></p>
          </div>
        </div>
        <a href=editprofile.php> <button style="text-align:center;width:150px;margin-left:40%;margin-top:2%;" type="button" class="btn btn-primary center-block">Edit Profile</button></a>
      </div>

      <div style=" margin-left:2%;margin-right:2%;margin-top:2%;" class="col">

        <div class="card border-warning mb-3" style="width: 100%;background-color:#E4DBDB;">
          <div style="text-align:left;font-size:25px;" class="card-header"><b>Nama Mahasiswa</b></div>
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"><?php echo $Nama ?></p>
          </div>
        </div>

        <div class="card border-warning mb-3" style="width: 100%;background-color:#E4DBDB;">
          <div style="text-align:left;font-size:25px;" class="card-header"><b>Umur</b></div>
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"><?php echo $Umur ?></p>
          </div>
        </div>

        <div class="card border-warning mb-3" style="width: 100%;background-color:#E4DBDB;">
          <div style="text-align:left;font-size:25px;" class="card-header"><b>Alamat Mahasiswa</b></div>
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"><?php echo $Alamat ?></p>
          </div>
        </div>

        <div class="card border-warning mb-3" style="width: 100%;background-color:#E4DBDB;">
          <div style="text-align:left;font-size:25px;" class="card-header"><b>Gender</b></div>
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"><?php echo $Gender ?></p>
          </div>
        </div>

        <div class="card border-warning mb-3" style="width: 100%;background-color:#E4DBDB;">
          <div style="text-align:left;font-size:25px;" class="card-header"><b>Semester</b></div>
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"><?php echo $Semester ?></p>
          </div>
        </div>

        <div class="card border-warning mb-3" style="width: 100%;background-color:#E4DBDB;">
          <div style="text-align:left;font-size:25px;" class="card-header"><b>Jurusan</b></div>
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"><?php echo $Jurusan ?></p>
          </div>
        </div>

        <div class="card border-warning mb-3" style="width: 100%;background-color:#E4DBDB;">
          <div style="text-align:left;font-size:25px;" class="card-header"><b>Domisili Kampus</b></div>
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"><?php echo $Domisili ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>