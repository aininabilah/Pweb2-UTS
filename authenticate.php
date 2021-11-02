<link href="Asset/css/bootstrap.min.css" rel="stylesheet">
<?php

session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';

//koneksi ke database
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

//cek apakah berhasil terkoneksi
if (mysqli_connect_errno()) {

    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

//LOGIN
function login($data){
    global $con;
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {

    $stmt->bind_param('s', $data['username']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();

        if (password_verify($data['password'], $password)) {
            
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $data['username'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['id'] = $id;

            header('Location: home.php');

        } else {
            echo '<div class="alert alert-danger" role="alert" style="text-align:center";>Incorrect username and/or password! </div >';
        }
    } else {
          echo '<div class="alert alert-danger" role="alert" style="text-align:center";>Incorrect username and/or password! </div >';
    }
    $stmt->close();
}
}

//REGISTER
function registrasi($data){
    global $con;

    $username=strtolower(stripslashes($data["username"]));
    $password=mysqli_real_escape_string($con, $data["password"]);
    $password2=mysqli_real_escape_string($con ,$data["password2"]);
    $email=$data['email'];

    //cek apakah username sudah ada atau belum
    $res= mysqli_query($con,"SELECT username FROM accounts WHERE username='$username' ");
    if (mysqli_fetch_assoc($res)){
        echo "<script>
               alert ('username sudah digunakan!')
               </script>";
               return false;
    }

    //pengecekan apakah password sama dengan konfirmasi password
    if ($password!==$password2){
        echo " <script>
        alert ('Konfirmasi password tidak sesuai!');
        </script> ";
        return false;
    }

     //enkripsi password
     $password=password_hash($password, PASSWORD_DEFAULT);

     //menambahkan data ke database
     mysqli_query($con, "INSERT INTO accounts VALUES ('','$username','$password','$email')");
     return mysqli_affected_rows($con);
    }
     ?>



