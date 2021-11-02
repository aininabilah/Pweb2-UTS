<?php
require 'authenticate.php';
if(isset($_POST["submit"])){
    if (login($_POST)>0){
            echo "<script>
            alert('berhasil login')
             </script>";
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
        <h1 style="font-weight: bold;">Login</h1>
        <form action="" method="post">
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="Username" id="email" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <a href=home.php><button type="submit" name="submit"> Login </button></a>
            <p style="padding: 20px 0 10px 0;"><b>Don't have an account yet ?</b> <a href="register.php" style="text-align: center; color: #A7871C; text-decoration: none;"><b>Register Now</b></a></p>
        </form>
    </div>
</body>
</html>