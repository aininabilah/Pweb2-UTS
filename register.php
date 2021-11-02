<?php
require 'authenticate.php';
if(isset($_POST["register"])){
    if (registrasi($_POST)>0){
        echo "<script>
        alert('user baru berhasil ditambahkan!')
         </script>";
         header('Location: index.php');
    }else{
        echo mysqli_error($con);    
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="icon" type="image/png" href="Asset/IconUnsri.png">
</head>
<body>
    <div class="login">
        <h1 style="font-weight: bold;">Register</h1>
        <form action="" method="post">

            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="Username" id="username" required>

            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Password" id="password" required>

            <label for="password2">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password2" placeholder="Konfirmasi Pasword" id="password2" required>

            <label for="email">
                <i class="fas fa-envelope"></i>
            </label>
            <input type="text" name="email" placeholder="Email" id="email" required>

            <a href=index.php><button type="submit" name="register"> Register </button></a>
            <p style="padding: 20px 0 10px 0;"><b>Already have an account ?</b> <a href="index.php" style="text-align: center; color: #A7871C; text-decoration: none;"><b>Login Now</b></a></p>
            <br>
        </form>
    </div>
</body>
</html>