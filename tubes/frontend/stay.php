<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stay</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Whisper&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');

        * {
            margin: 0;
            padding: 0;
        }
        /* NAVBAR */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
         nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: 0.6s;
            padding: 20px 60px;
            z-index: 100000;
            background: black;

        }
        nav .logo {
            position: relative;
            font-weight: 500;
            color: #fff;
            text-decoration: none;
            font-size: 20px;
            letter-spacing: 2px;
            transition: 0.6s;
            font-family: 'Whisper';
        }
        .font {
            font-family: 'Whisper';
            font-size: 30px;
        }
        nav ul {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            background: black;
        }
        nav ul li {
            position: relative;
            list-style: none;
            font-family: 'Secular One';
        }
        nav ul li a {
            position: relative;
            margin: 0 10px;
            text-decoration: none;
            color: #fff;
            letter-spacing: 1px;
            font-weight: bold;
            transition: 0.6s;
        }
        nav ul li a::after{
            content: '';
            height: 3px;
            width: 0;
            background: white;
            position: absolute;
            left: 0;
            bottom: -10px;
            transition: 0.5s;
        }
        nav ul li a:hover:after {
            width:100%;
        }
        nav ul li a i {
            width: 25px;
            height: 25px;
        }

        /* CONTENT */
        body {
            margin: 30px 0 0;
            padding: 0;
            font-family: 'Source Sans Pro', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: black;
        }
        .container {
            padding: 100px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(8, 1fr);
            margin: 5px 15px;
            gap: 20px;
            padding-bottom: 100px;
            position: relative;
        }
        .card {
            width: 100%;
            height: auto;
            grid-column: span 2;
            margin: 10px 0;
            border-radius: 10px;
            position: relative;
            box-shadow: 0 10px 10px rgba(0, 0, 0, .1);
            background-color: rgba( 255, 255, 255);
            transition: all 0.5s;
        }
        .head-card {
            padding : 20px;
            padding-bottom: 10px;
        }
        .head-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .body-card {
            padding: 10px 15px;
        }
        .body-card h1 {
            margin: 0;
            text-align: center;
            font-size: 24px;
            padding-top: 10px;
            font-family: 'Kanit';
        }
        .body-card p {
            margin: 0;
            text-align: center;
            font-size: 15px;
            color: rgba(169, 169, 169);
        }
        .body-card .buy {
            background-color: black;
            width: 100%;
            height: 40px;
            border-radius: 10px;
            text-align: center;
            transition: all 0.5s;
        }
        .body-card h3 {
            color: rgba(0, 0, 0);
            text-align: center;
            font-size: 12px;
        }
        .buy h3 {
            color: aliceblue;
            padding-top: 4px;
            font-size: 20px;
        }
        .rating {
            color: #db6301;
            text-align: center;
            font-size: 22px;
        }
        .buy:hover {
            background-color: rgba(141, 0, 94);
            cursor: pointer;
        }
        .card-hover {
            -webkit-transform: scale(1.05);
            transform: scale(1.05);
            cursor: pointer;
        }


    </style>
</head>
<body>
<!-- ***************  NAVBAR  **************** -->
<nav>
    <a href="#" class="logo"> life on<div class="font">Purwakarta</div></a>
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="stay.php">STAY</a></li>
            <li><a href="eatdrink.php">EAT&DRINK</a></li>
        </ul>
        <ul>
            <li><a href="lognreg.php"><i class="material-icons">logout</i></a></li>
        </ul>
</nav>
<!-- ***************  CONTENT **************** -->
<div class="container">
    <div class="card">
        <div class="head-card">
            <img src="image/primeplaza.jpeg" alt="">
        </div>
        <div class="body-card">
            <h1>Prime Plaza</h1>
            <p>Bungursari, Purwakarta</p>
            <h3>Start form Rp 850.000</h3>
            <div class="rating">
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
            </div>
            <div class="buy">
                <h3>Check</h3>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="head-card">
            <img src="image/harper.jpeg" alt="">
        </div>
        <div class="body-card">
            <h1>Harper by ASTON</h1>
            <p>Pusat Kota Purwakarta, Purwakarta</p>
            <h3>Start from Rp 877.200</h3>
            <div class="rating">
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
            </div>
            <div class="buy">
                <h3>Check</h3>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="head-card">
            <img src="image/grandpermata.jpeg" alt="">
        </div>
        <div class="body-card">
            <h1>Grand Permata</h1>
            <p>Pusat Kota Purwakarta, Purwakarta</p>
            <h3>Start from Rp 570.000</h3>
            <div class="rating">
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
            </div>
            <div class="buy">
                <h3>Check</h3>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="head-card">
            <img src="image/grandsitubuleud.jpeg" alt="">
        </div>
        <div class="body-card">
            <h1>Grand Situ Buleud</h1>
            <p>Pusat Kota Purwakarta, Purwakarta</p>
            <h3>Start from Rp 432.098</h3>
            <div class="rating">
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
            </div>
            <div class="buy">
                <h3>Check</h3>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="head-card">
            <img src="image/jtlvalley.jpeg" alt="">
        </div>
        <div class="body-card">
            <h1>Jatiluhur Valley Resort</h1>
            <p>Jatiluhur, Purwakarta</p>
            <h3>Start from Rp 475.000</h3>
            <div class="rating">
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
            </div>
            <div class="buy">
                <h3>Check</h3>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="head-card">
            <img src="image/dcabin.jpeg" alt="">
        </div>
        <div class="body-card">
            <h1>D'Cabin Hotel Container</h1>
            <p>Jatiluhur, Purwakarta</p>
            <h3>Start from Rp 580.000</h3>
            <div class="rating">
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
            </div>
            <div class="buy">
                <h3>Check</h3>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="head-card">
            <img src="image/hotelintan.jpeg" alt="">
        </div>
        <div class="body-card">
            <h1>Intan Hotel</h1>
            <p>Pusat Kota Purwakarta, Purwakarta</p>
            <h3>Start from Rp. 202.704</h3>
            <div class="rating">
                <i class="material-icons">star</i>
            </div>
            <div class="buy">
                <h3>Check</h3>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="head-card">
            <img src="image/laderra.jpeg" alt="">
        </div>
        <div class="body-card">
            <h1>La Derra Hotel</h1>
            <p>Pusat Kota Purwakarta, Purwakarta</p>
            <h3>Start from Rp 370.000</h3>
            <div class="rating">
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
            </div>
            <div class="buy">
                <h3>Check</h3>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="head-card">
            <img src="image/hotelkhalista.jpeg" alt="">
        </div>
        <div class="body-card">
            <h1>Khalista Hotel</h1>
            <p>Pusat Kota Purwakarta, Purwakarta</p>
            <h3>Start from Rp 330.000</h3>
            <div class="rating">
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
            </div>
            <div class="buy">
                <h3>Check</h3>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="head-card">
            <img src="image/grandciwareng.jpeg" alt="">
        </div>
        <div class="body-card">
            <h1>Grand Ciwareng Inn</h1>
            <p>Babakancikao, Purwakarta</p>
            <h3>Start from Rp 320.000</h3>
            <div class="rating">
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
            </div>
            <div class="buy">
                <h3>Check</h3>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="head-card">
            <img src="image/permatahotel.jpeg" alt="">
        </div>
        <div class="body-card">
            <h1>Permata Hotel</h1>
            <p>Pusat Kota Purwakarta, Purwakarta</p>
            <h3>Start from Rp 245.000</h3>
            <div class="rating">
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
            </div>
            <div class="buy">
                <h3>Check</h3>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="head-card">
            <img src="image/mphotel.jpeg" alt="">
        </div>
        <div class="body-card">
            <h1>MP Hotel</h1>
            <p>Pusat Kota Purwakarta, Purwakarta</p>
            <h3>Start from Rp 230.000</h3>
            <div class="rating">
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
            </div>
            <div class="buy">
                <h3>Check</h3>
            </div>
        </div>
    </div>

</div>
</body>
</html>