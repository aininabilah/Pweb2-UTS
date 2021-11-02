<?php include "data.php" ?>
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

  <title>Edit Profile</title>

  <style type="text/css">
    body {
      font-size: 14pt;
    }
  </style>

</head>

<body style="background-color:#D8BF68;">
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

  <!--start form-->
  <form action="profile.php" method="POST" enctype="multipart/form-data" style="margin:auto;background-color:hsl(46, 72%, 47%,0.5);
    border-radius:30px; width:70%; padding:4%;margin-bottom:3%;margin-top:3%">

    <h3 style="text-align:center;">Edit Your Profile</h3>
    <div class="mb-3">
      <label for="formFile" class="form-label">Foto Profil</label>
      <input type="file" class="form-control" id="profil" name="profil" aria-describedby="" required>
    </div>
    <div class="mb-3">
      <label for="Nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="Nama" name="Nama" aria-describedby="" value="<?= $Nama ?>" required>
    </div>
    <div class="mb-3">
      <label for="Umur" class="form-label">Umur</label>
      <select id="Umur" name="Umur" class="form-select" aria-label="Default select example" value="<?= $Umur ?>" required>
        <option disabled selected> Pilih Umur </option>
        <?php
        //perulangan
        $Umur = 18;
        for ($x = 1; $x <= 100; $x++) {
          if ($x == $Umur) {
        ?>
            <option selected="selected">
              <?= $Umur . " Tahun" ?>
            </option>
        <?php
          } else {
            echo "<option value='$x Tahun' required> $x Tahun </option> ";
          }
        }
        ?>

      </select>
    </div>
    <div class="mb-3">
      <label for="Alamat" class="form-label">Alamat</label>
      <input type="text" class="form-control" id="Alamat" name="Alamat" aria-describedby="" value="<?= $Alamat ?>" required>
    </div>
    <div class="mb-3">
      <label for="Gender" class="form-label">Gender</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" id="Gender" name="Gender" value="Perempuan" checked >
        <label class="form-check-label" for="flexRadioDefault1">
          Perempuan
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" id="Gender" name="Gender" value="Laki-laki" >
        <label class="form-check-label" for="flexRadioDefault2">
          Laki-laki
        </label>
        &nbsp;
      </div>
      <div class="mb-3">
        <label for="Semester" class="form-label">Semester</label>
        <select class="form-select" id="Pekerjaan" name="Semester" aria-label="" value="Tiga" required>
          <option selected>Pilih Semester</option>
          
          <?php
          //array
          $namaSemester = array('Satu', 'Dua', 'Tiga', 'Empat', 'Lima', 'Enam', 'Tujuh', 'Delapan', 'Sembilan', 'Sepuluh');
          //perulangan
          for ($x = 0; $x < 7; $x++) {
            if($namaSemester[$x]==$Semester){
              ?>
              <option selected="selected"><?=$namaSemester[$x]?> </option>
            <?php
            } else {
            echo "<option value='$namaSemester[$x]' required> $namaSemester[$x] </option> ";
          }
        }
          ?>
          
        </select>
      </div>

      <div class="mb-3">
        <label for="Jurusan" class="form-label">Jurusan</label>
        <select class="form-select" id="Jurusan" name="Jurusan" aria-label="" value="<?= $Jurusan ?>" required>
          <option selected>Pilih Jurusan</option>

          <?php
          //array
          $namaJurusan = array(
            'Teknik Informatika (S1)', 'Sistem Informasi (S1)', 'Sistem Komputer (S1)', 'Manajemen Informatika (D3)',
            'Teknik Komputer(D3)', 'Teknik Komputer Jaringan(D3)', 'Komputerisasi Akuntansi(D3)'
          );
          //perulangan
          for ($x = 0; $x < 7; $x++) {
            if($namaJurusan[$x]==$Jurusan){
              ?>
              <option selected="selected"><?=$namaJurusan[$x]?> </option>
            <?php
            } else {
            echo "<option value='$namaJurusan[$x]' required> $namaJurusan[$x] </option> ";
          }
        }
          ?>
        </select>
      </div>
      <div class="mb-3">
        <label for="Semester" class="form-label">Domisili Kampus</label>
        <select class="form-select" id="Domisili" name="Domisili" aria-label="" required>
          <option selected><?= $Domisili ?></option>
          <option value="Palembang">Palembang</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="Bio" class="form-label">Bio</label>
        <textarea class="form-control" id="Bio" name="Bio" rows="3" required> <?= $Bio ?></textarea>
      </div>
    </div>

    <input class="btn btn-success" type="submit" name="submit" value="Save">
    <a href=profile.php class="btn btn-danger"><i classs="fas fa-sign-out-alt"></i> Batal</a>
  </form>
  <!--end form-->

  <!--footer-->
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
  <!-- Footer -->


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>