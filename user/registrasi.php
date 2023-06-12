<?php 
require '../functions.php';

if( isset($_POST["register"])) {
    if ( registrasi($_POST) > 0){
        echo "<script>
            alert('user baru berhasil ditambahkan!');
            </script>";
    } else {
        echo "<script>
        alert('user tidak berhasil ditambahkan!');
        window.location.href='registrasi.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    
    <title>Registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="login form">
            <header>Register</header>
            <form action="" method="post">
                <input type="text" placeholder="Masukan Email" name="email">
                <input type="text" placeholder="Masukan Username" name="username">
                <input type="password" placeholder="Masukan Password" name="password">
                <input type="password" placeholder="Masukan Ulang Password" name="password2">
                <button type="submit" class="button" name="register">Daftar</button>
                <!-- <input type="button" class="button" value="Daftar" name="register"> -->
            </form>
            <div class="signup">
            <span class="signup">Sudah punya akun?
                <label for="check"><a href="login.php">Login</a></label>
            </span>
            </div>
    </div>
</div>

</body>
</html>