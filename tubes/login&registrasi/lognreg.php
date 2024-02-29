<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
         }
         body {
            min-height: 100vh;
            width: 100%;
            background: url(image/backgroundairmancur.jpg);
         }
         .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 430px;
            width: 100%;
            background: #fff;
            border-radius: 7px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.3);
         }
         .container .registration {
            display: none;
         }
         #check:checked ~ .registration {
            display: block;
         }
         #check:checked ~ .login {
            display: none;
         }
         #check {
            display: none;
         }
         .container .form {
            padding: 2rem;
         }
         .form header {
            font-size: 2rem;
            font-weight: 500;
            text-align: center;
            margin-bottom: 1.5rem;
         }
         .form input {
            height: 60px;
            width: 100%;
            padding: 0 15px;
            font-size: 17px;
            margin-bottom: 1.3rem;
            border: 1px solid #ddd;
            border-radius: 6px;
            outline: none;
         }
         .form input:focus {
            box-shadow: 0 1px rgba(0,0,0,0.2);
         }
         .form a {
            font-size: 16px;
            color: grey;
            text-decoration: none;
         }
         .form a:hover {
            text-decoration: underline;
         }
         .form input .button {
            color: #fff;
            background: grey;
            font-size: 1.2rem;
            font-weight: 500;
            letter-spacing: 1px;
            margin-top: 1.7rem;
            cursor: pointer;
            transition: 0.4s;
         }
         .form input .button:hover {
            background: grey;
         }
         .signup {
            font-size: 17px;
            text-align: center;
         }
         .signup label {
            color: grey;
            cursor: pointer;
         }
         .signup label:hover {
            text-decoration: underline;
         }



    </style>
</head>
<body>
    <div class="container">
        <input type="checkbox" id="check">
        <div class="login form">
            <header>Login</header>
            <form action="#">
                <input type="text" placeholder="Masukan Email">
                <input type="password" placeholder="Masukan Password">
                <a href="#">Lupa Password?</a>
                <input type="button" value="Login" class="button">
            </form>
            <div class="signup">
                <span class="signup">Belum punya akun?
                <label for="check">Daftar</label>
                </span>
            </div>
        </div>
        <div class="registration form">
            <header>Register</header>
            <form action="#">
                <input type="text" placeholder="Masukan Email">
                <input type="password" placeholder="Masukan Password">
                <input type="password" placeholder="Masukan Ulang Password">
                <input type="button" class="button" value="Daftar">
            </form>
            <div class="signup">
            <span class="signup">Sudah punya akun?
                <label for="check">Login</label>
            </span>
            </div>
        </div>
    </div>
</body>
</html>