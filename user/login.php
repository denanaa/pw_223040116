<?php 

// session_start();

require '../functions.php';

// if (isset($_SESSION['login'])) {
//     header("Location : home.php");
//     exit;
// }

// if (isset($_SESSION['login'])) {
//     header("Location: ../admin/index.php");
// }


// if ( isset($_POST['login'])) {

//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $conn = koneksi();


//     $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");

//     if (mysqli_num_rows($result) >= 1) {
//         $row = mysqli_fetch_assoc($result);
//         if(password_verify($password, $row['password'])){
//             if($row["level"] == "admin") {
//                 $_SESSION["login"] = true;
//                 $_SESSION["login2"] = true;
//             header("location : ../admin/index.php ");
//             exit;
//         }

//         if($row["level"] == "user") {
//             $_SESSION["login"] = true;
//             header("location: home.php");
//             exit;
//         } else {
//             echo "<script type='text/javascript'>alert('username dan password salah!');</script>";
//             echo "<meta http-equiv='refresh' content='0; url=login.php'>";
//         }
//         }
//     }
// }


//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $conn = koneksi();

//     $result = query("SELECT * FROM admin WHERE username = '$username'")[0];

//         if(password_verify($password, $result['password'])){
            
//         $_SESSION['username']   = $result['username'];
//         $_SESSION['level']      = $result['level'];
//         echo "<script>alert('Login Berhasil!');</script>";
  
//         if($result['level'] == 'admin'){
//             echo "<meta http-equiv='refresh' content='0; url=../admin/index.php'>";
//         } if($result['level'] == 'user') {
//             echo "<meta http-equiv='refresh' content='0; url=home.php'>";
//         }
//     } else {
//         echo "<script type='text/javascript'>alert('username dan password salah!');</script>";
//         echo "<meta http-equiv='refresh' content='0; url=login.php'>";
//     }
// }


if (isset($_SESSION["login"])) {
	header("Location: home.php");
	exit;}
if (isset($_SESSION["login2"])) {
	header("Location: ../admin/index.php");
	exit;
}




if (isset($_POST["login"])) {
    $conn = koneksi();

	$pesan = '';
	$redirect = '';
	$username = $_POST["username"];
	$password = $_POST["password"];

	$q = $conn->query("SELECT * FROM admin WHERE username = '$username'");
	$get_data = mysqli_fetch_assoc($q); 

	// Cek username
	if (empty($get_data)) {
		// cek password
		$pesan ='Username belum terdaftar';
	}else{
		if (!password_verify($password, $get_data['password'])) {
		$pesan="Username dan password salah";
	}elseif ($get_data['level'] == "admin"){
			session_start();
			$_SESSION['id'] = $get_data['id'];
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $get_data['email'];
			$pesan = "Selamat Datang Admin";
			$redirect = "../admin/index.php";
			$_SESSION["login2"] = true;
			$_SESSION["login"] = true;
			header("Location: ../admin/index.php");
			exit;
		} else {
			session_start();
			$_SESSION['id'] = $get_data['id'];
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $get_data['email'];
			$pesan = "Selamat Datang";
			$redirect = "home.php";
			$_SESSION["login"] = true;
			header("Location: home.php");
			exit;
		}
	} 
echo 
("<script>
alert ('$pesan');
window.location.href='$redirect';
</script>");
$error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    
    <title>Login</title>
</head>
<body>

<?php if ( isset($error)) : ?>
    <p style="color: red font-style: italic;">username / password salah</p>
<?php endif; ?>

<div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
            <header>Login</header>
            <form action="" method="post">
                <input type="text" placeholder="Masukan Username" name="username" >
                <input type="password" placeholder="Masukan Password" name="password">
                <button type="submit" class="button" name="login">Login</button>
                <!-- <input type="button" value="Login" class="button"> -->
            </form>
            <div class="signup">
                <span class="signup">Belum punya akun?
                <label for="check"><a href="registrasi.php">Daftar</a></label>
                </span>
            </div>
    </div>
</div>

</body>
</html>