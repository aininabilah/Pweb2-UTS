<?php
//pemilihan
 if (!isset($_POST['submit'])){
$Nama= "Aini Nabilah";
$Umur= "18 Tahun";
$Alamat = "Jalan netar jaya No.73 Palembang";
$Semester = "Tiga";
$Jurusan="Teknik Informatika (S1)";
$Domisili="Indralaya";
$Gender="Perempuan";
$Bio="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam sapiente officiis
 sint quos nostrum delectus aliquid voluptates! Vero sequi fuga voluptatem doloremque, qui consectetur ipsum corrupti, necessitatibus earum illo pariatur?";
$profil="Asset/foto.jpg";

 } else {
   $Nama=$_POST ['Nama'];
   $Umur=$_POST['Umur'];
   $Alamat=$_POST['Alamat'];
   $Semester=$_POST['Semester'];
   $Jurusan=$_POST['Jurusan'];
   $Domisili=$_POST['Domisili'];
   $Gender=$_POST['Gender'];
   $Bio=$_POST['Bio'];
  
   $profil = profil();

  }
   function profil(){
    $namaFile = $_FILES['profil']['name'];
    $namaSementara = $_FILES['profil']['tmp_name'];
    $upld = "Asset/";
    $diUpload = move_uploaded_file($namaSementara, $upld . $namaFile);
    $profil = $upld . $namaFile;

    return $profil;
 }
 
?>