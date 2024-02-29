<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purwakarta Tourism</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        /* Font */
        @import url('https://fonts.googleapis.com/css2?family=Amarante&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Sacramento&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Whisper&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Goblin+One&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Share+Tech&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Smooch&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Satisfy&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Secular+One&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Carter+One&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Mogra&display=swap');
    
        * {
            margin: 0;
            padding: 0;
        }
        body {
            background: white;
            min-height: 100vh;
        }

        /* Homepage */
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
            /* font-family: 'Secular One'; */
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
        .banner {
            position: relative;
            width: 100%;
            height: 100vh;
            background: url("image/backgroundairmancur.jpg");
            background-size: cover;
        }
        .text {
            top: 50%;
            width: 100%;
            text-align: center;
            color: white;
            position: absolute;
            transform: translateY(-50%);
        }
        .text h1 {
            font-size: 60px;
            margin-top: 80px;
            font-family: 'Amarante';
            letter-spacing: 50px;
            text-shadow: 3px 2px 1px black;
        }
        .text p {
            margin: 20px auto;
            font-weight: 60;
            line-height: 25px;
            font-size: 40px;
            color: red;
            font-family: 'Goblin One';
            letter-spacing: 25px;
            text-shadow: 3px 2px 1px black;
        }
         
        /* About/Profile */
        .content h1 {
            font-family: 'Share Tech';
            font-size: 100px;
            font-weight: 100;
            color: black;
            letter-spacing: 150px;
            padding: 30px 30px 0px 80px;
            opacity: 0.10;
            position: absolute;
        }
        .content h2 {
            font-family: 'Share Tech';
            font-size: 50px;
            font-weight: 100;
            text-align: center;
            color: black;
            letter-spacing: 5px;
            padding: 50px 0;
        }
        .content p {
            font-family: 'Montserrat';
            font-size: 20px;
            font-weight: 120;
            text-align: center;
            color: black;
            letter-spacing: 2px;
            padding-bottom: 15px;
        }
        .about {
            background-color: black;
            min-height: 100vh;
        }
        .about img {
            float: left;
            width: 500px;
            height: 400px;
            margin: 100px 100px 20px 100px;
            border: 1px solid grey;
            border-radius: 20%;
            filter: drop-shadow(3px 3px 3px black);
        }
        .about p {
            color: white;
            padding: 100px;
            font-size: 15px;
            font-family: 'Secular One';
        }
        .about p img {
            width: 100px;
            height: 80px;
            float: right;
        }
        /* .about .notes p {
            color: white;
            float: left;
            padding: 20px 100px 0px 100px;
        } */
        /* Highlight */
        .container h1 {
            font-family: 'Share Tech';
            font-size: 100px;
            font-weight: 100;
            color: black;
            letter-spacing: 90px;
            padding: 30px 30px 0px 80px;
            opacity: 0.10;
            position: absolute;
        }
        .container h2 {
            font-family: 'Smooch';
            font-size: 50px;
            font-weight: 100;
            text-align: center;
            color: black;
            letter-spacing: 5px;
            padding: 50px 0;
        }
        .hightlight {
            background-image: url('image/gununglembu.jpg');
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background-size: cover;
            /* filter: blur(8px); */
        }
        .box {
            width: 300px;
            height: 500px;
            margin: 50px;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .text1 h2 {
            width: 300px;
            height: 50px;
            background-color: white;
            display: flex;
            color: black;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 50px;
            text-shadow: 1px 1px 1px grey;
        }
        .text1 p {
            width: 300px;
            height: 200px;
            background-color: white;
            display: flex;
            color: black;
            box-shadow: 1px 0 10px black;
            padding: 10px 20px 20px 20px;
        }
        .box img {
            width: 300px;
            height: 200px;
            display: flex;
        }

        /* Kuliner */
        .content-kuliner h1 {
            font-family: 'Share Tech';
            font-size: 100px;
            font-weight: 100;
            color: black;
            letter-spacing: 90px;
            padding: 30px 30px 0px 80px;
            opacity: 0.10;
            position: absolute;
        }
        .content-kuliner h2 {
            font-family: 'Smooch';
            font-size: 50px;
            font-weight: 100;
            text-align: center;
            color: black;
            letter-spacing: 5px;
            padding: 50px 0;
        }
        .content-kuliner p {
            font-family: 'Montserrat';
            font-size: 20px;
            font-weight: 120;
            text-align: center;
            color: black;
            letter-spacing: 2px;
            padding-bottom: 50px;
            letter-spacing: 5px;
        }
        .background-kuliner {
            background: black;
            padding: 200px 0 200px 0;
        }
        .slider {
            background: black;
            display: flex;
            transition: 2s;
        }
        .slider img {
            width: 680px;
            height: 400px;
        }
        .slider li {
            position: relative;
        }
        .slider li .title {
            display: block;
            width: 680px;
            height: 400px;
            color: white;
            position: absolute;
            top: 0;
            line-height: 100px;
            text-align: right;
            font-size: 50px;
            margin-left: -50px;
            font-family: 'Satisfy';
            text-shadow: 3px 2px 1px black;
            transition: 4s;
        }
        .slider li .content-img {
            display: block;
            width: 680px;
            height: 400px;
            color: white;
            position: absolute;
            top: 300px;
            line-height: 20px;
            text-align: left;
            font-size: 20px;
            padding: 0px 20px;
            font-family: 'Secular One';
            text-shadow: 1px 1px 1px black;
            transition: 4s;
        }
        .wrapper {
            width: 680px;
            height: 400px;
            margin: auto;
            border-radius: 5px;
            overflow: hidden;
        }
        #slide-1:target ~ .slider {
            margin-left: 0px;
        }
        #slide-2:target ~ .slider {
            margin-left: -100%;
        }
        #slide-3:target ~ .slider {
            margin-left: -200%;
        }
        #slide-4:target ~ .slider {
            margin-left: -300%;
        }
        .navigation a {
            display: inline-block;
            height: 25px;
            width: 25px;
            background-color: grey;
            border-radius: 50%;
            font-size: 0px;
            margin: 5px;
            transition: 1s;
            text-decoration: none;
        }
        .navigation a:hover {
            background-color : black;
        }
        .navigation {
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            text-align: center;
        }

        /* Destination */
        .content-destination h1 {
            font-family: 'Share Tech';
            font-size: 100px;
            font-weight: 100;
            color: black;
            letter-spacing: 230px;
            padding: 30px 30px 0px 80px;
            opacity: 0.10;
            position: absolute;
        }
        .content-destination h2 {
            font-family: 'Smooch';
            font-size: 50px;
            font-weight: 100;
            text-align: center;
            color: black;
            letter-spacing: 5px;
            padding: 50px 0;
        }
        .content-destination p {
            font-family: 'Montserrat';
            font-size: 20px;
            font-weight: 120;
            text-align: center;
            color: black;
            letter-spacing: 2px;
            padding-bottom: 50px;
            letter-spacing: 5px;
        }
        .background-destination {
            background: black;
            padding: 0;
            font-family: 'Montserrat';
            color: white;
            height: 100vh;
        }
        .background-destination h1 {
            font-size: 80x;
            margin: 50px 0;
            text-align: center;
            text-shadow: 1px 1px 1px black;
            padding: 50px 50px 0px 50px;
            font-family: 'Secular One';
            letter-spacing: 5px;
        }
        .content-travel {
            width: 1200px;
            margin: auto;
            padding: 20px;
            border: none;
            border-radius: 5px;
        }
        .gallery {
            list-style-type: none;
        }
        .gallery li {
            width: 200px;
            height: 200px;
            border-radius: 30%;
            float: left;
            margin: 20px 0 20px 20px;;
            position: relative;
        }
        .gallery li img {
            /* border-radius: 30%; */
        }
        .gallery li span {
            display: block;
            width: 200px;
            height: 200px;
            background-color: rgba(200,200,200,0.5);
            /* border-radius: 30%; */
            position: absolute;
            top: 0;
            text-align: center;
            line-height: 200px;
            color: grey;
            text-shadow: 1px 1px 1px black;
            opacity: 0;
        }
        .gallery li a:hover span {
            opacity: 1;
        }
        .overlay {
            width: 0;
            height: 0;
            overflow: hidden;
            position: fixed;
            top: 0;
            left: 0;
            background: rgba(0,0,0,0);
            z-index: 9999;
            transition: 1s;
            text-align: center;
            padding: 100px;
        }
        .overlay:target {
            width: auto;
            height: auto;
            bottom: 0;
            right: 0;
            background: rgba(0,0,0,.7);
        }
        .overlay img {
            max-height: 100%;
            padding: 20px;

        }
        .overlay:target img {
            animation: zoomdanfade 1s;
        }
        .overlay .close {
            position: absolute;
            bottom: 50px;
            left: 50%;
            margin-left: -50px;
            color: white;
            text-decoration: none;
            background-color: black;
            border: 1px solid white;
            line-height: 14px;
            padding: 5px;
            opacity: 0;
        }
        .overlay:target .close {
            animation: slidedown .5s .5s forwards;
        }

        .overlay:target .next,
        .overlay:target .prev {
            animation: fade .5s .5s forwards;
        }

        /* navigasi */
        .next, .prev {
            width: 48px;
            height: 48px;
            position: absolute;
            background-image: url('image/arrownext.png');
            top: 50%;
            margin-right: 50px;
            opacity: 0;
            text-decoration: none;
            font-size: 0;
        }
        .prev {
            background-image: url('image/arrowprev.png');
            margin-left: -50px;
        }

        @keyframes fade {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        @keyframes zoomdanfade {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
        @keyframes slidedown {
            0% {
                opacity: 0;
                margin-top: -20px;
            }
            100% {
                opacity: 1;
                margin-top: 0;
            }
        }

        /* Map */

        .content-map {
            background-image: url('image/tamansribaduga.jpg');
            background-size: cover;
            width: 100%;
            height: 100vh;
        }
        .content-map h1 {
            font-family: 'Share Tech';
            font-size: 100px;
            font-weight: 100;
            color: white;
            letter-spacing: 150px;
            padding: 30px 30px 0px 80px;
            opacity: 0.10;
            position: absolute;
        }
        .content-map h2 {
            font-family: 'Smooch';
            font-size: 50px;
            font-weight: 100;
            text-align: center;
            color: white;
            letter-spacing: 5px;
            padding: 50px 0;
        }
        .content-map p {
            font-family: 'Montserrat';
            font-size: 20px;
            font-weight: 120;
            text-align: center;
            color: white;
            letter-spacing: 2px;
            padding-bottom: 50px;
            letter-spacing: 5px;
        }
        .box-map {
            background: rgba(0,0,0,.7);
            /* bottom: 100%; */
        }
        .background-map {
            background: black;
            display: flex;
            height: 200vh;
        }
        /* .background-map img {
            float: left;
            margin: 50px;
            margin-left: 100px;
            height: 500px;
            width: 600px;
        } */
        .gallery-map {
            /* display: flex; */
            list-style-type: none;
            /* position: relative; */
        }
        .gallery-map li {
            margin: 100px;
            width: 80px;
            height: 80px;
            /* display: flex;
            position: relative; */
            float: left;
            color: grey;
            padding-top: 60px;
            font-size: 10px;
        }
        .gallery-map li img {
            border-radius: 20%;
            /* box-shadow: 3px 2px grey; */
        }
        .gallery-map li .text-map {
            font-family: 'Carter One';
        }
        /* Contact */
        .background-contact {
            background: white;
            height: 50vh;
        }
        .contact {
            font-size: 20px;
            margin: 100px;
            padding: 30px;
        }
        .contact img {
            width: 150px;
            height: 100px;
        }
        .contact-info {
            display: flex;
        }
        .contact2 {
            margin-top: 75px;
        }
        .contact2 h2 {
            text-align: center;
            padding-bottom: 100px;
        }
        .contact-list {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        .contact-list a {
            padding: 15px;
            display: inline-block;
        }
        .contact-list img {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <!-- ***************  HOMEPAGE **************** -->
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
    <div class="banner">
        <div class="text">
            <h1>PURWAKARTA</h1>
            <p>ISTIMEWA</p>
        </div>
    </div>
    <!-- ***************  ABOUT / PROFILE  **************** -->
    <div class="content">
        <h1>WELCOME</h1>
        <h2>SELAMAT DATANG DI PURWAKARTA</h2>
        <p>Kota Kecil yang memiliki sejuta kenangan dan dijuluki sebagai 'Kota Pensiun' karena Suasananya jauh dari hiruk pikuk kendaraan dan lalu lalang manusia</p>
    </div>
    <div class="about">
        <img src="image/wadukjatiluhur.webp">
        <p>Purwakarta adalah kota kecil yang indah, rumah bagi lebih dari 900 ribu orang dengan beragam latar belakang yerlang berbeda. Tetak di dalam provinsi Jawa Barat, Kabupaten Purwakarta telah berkembang pesat selama bertahun-tahun.
        Ada banyak hal menarik di Purwakarta yang dapat dijelajahi oleh wisatawan. Mulai dari wisata perkotaan, wisata alam, wisata budaya, wisata religi, wisata belanja, dan banyak lagi, bahkan Purwakarta juga menjadi salah satu surga kuliner bagi para pecintanya.
        Berkeliling kota kecil ini tidak perlu cemas karena PUrwakarta dilengkapi dengan berbagai pilihan moda transportasi. Integrasi antar moda yang juga memudahkan wisatawan dalam berwisata menjadi salah satu alasan tersendiri para wisatawan ingin berkunjung ke Purwakarta.</p>
        <p><img src="image/pwkistimewa.jpeg"></p>
    </div>
    <!-- ***************  HIGHTLIGHT  **************** -->
    <div class="container">
        <h1>PURWAKARTA</h1>
        <h2>hightlight</h2>
    </div>
    <div class="hightlight">
        <div class="box">
            <img src="image/tamansribaduga.jpg">
            <div class="text1">
                <h2>Taman Air Mancur Sribaduga</h2>
                <p>Situ Buleud berganti nama menjadi Taman Air Sri Baduga karena mempunyai air mancur sebagai landmark utama tempat wisata hits Purwakarta ini. Kabarnya, air mancur Sri Baduga masuk nominasi sebagai air mancur terbesar di Asia Tenggara.</p>
            </div>
        </div>
        <div class="box">
            <img src="image/kampungmaranggi.jpeg">
            <div class="text1">
                <h2>Kampung Maranggi</h2>
                <p>Kampung Maranggi Plered kerap ramai dikunjungi wisatawan dari berbagai daerah. Apalagi, lokasinya sangat strategis, yakni di sisi kiri jalur utama dari Purwakarta menuju Cianjur via Cirata. Di kawasan ini, terdapat puluhan lapak pedagang yang menjajakan sate maranggi beragam cita rasa.</p>
            </div>
        </div>
        <div class="box">
            <img src="image/tajuggede.jpg">
            <div class="text1">
                <h2>Masjid Agung Tajug Gede</h2>
                <p>Tajug Gede Cilodong memiliki sembilan beduk di teras selatan masjid. Kesembilan beduk tersebut akan di pukul secara bersama-sama pada Shalat Jumat. Setelah itu, sembilan muazin mengumandangkan azan.</p>
            </div>
        </div>
    </div>
    <!-- ***************  KULINER  **************** -->
    <div class="content-kuliner">
        <h1>EXPERIENCE</h1>
        <h2>kuliner</h2>
        <p>PERJALANAN KULINER MENGECAP RASA KHAS PURWAKARTA</p>
    </div>
    <div class="background-kuliner">
        <div class="wrapper">
            <div class="slides">
                 <span id="slide-1"></span>
                 <span id="slide-2"></span>
                 <span id="slide-3"></span>
                 <span id="slide-4"></span>

                <ul class="slider">
                    <li><img src="image/satemaranggi.jpg" id="#slide-1"><span class="title">Sate Maranggi</span><p class="content-img">Sate Maranggi adalah satu dari sekian banyak khazanah kuliner Indonesia yang sudah mendunia. Citarasa yang khas, tekstur yang empuk, menjadi salah-satu alasan Sate Maranggi menjadi kuliner yang populer.</p></li>
                    <li><img src="image/esciming.jpg" id="slide-2"><span class="title">Es Ciming</span><p class="content-img">Tumpukan es yang menggunung dengan lelehan krim susu putih yang dilengkapi dengan isian Hun Kue (sejenis Jelly namun lebih padat), ketan hitam, kolang kaling, kacang hijau, cincau hitam, parutan kelapa dan sirup merah ini begitu menggoda selera, terutama jika cuaca sedang dalam keadaan panas.</p></li>
                    <li><img src="image/simping.jpg" id="slide-3"><span class="title">Simping</span><p class="content-img">Simping merupakan kudap yang terbuat dari tepung tapioka, terigu ditambah bumbu penyedap serta aneka rasa dari rempah dan buah buahanPanganan ini merupakan kombinasi lezat dari. Bentuknya berupa lembaran pipih, bundar tipis.</p></li>
                    <li><img src="image/colenak.jpg" id="slide-4"><span class="title">Colenak</span><p class="content-img">Tapai singkong yang manis akan mengeluarkan wangi lezat yang semerbak ketika dipanggang. Selagi hangat, tapai singkong bakar ini disajikan dengan kinca, saus gula yang terbuat dari paduan manisnya gula aren dan rasa gurih kelapa parut.</p></li>
                </ul>
            </div>
            <div class="navigation">
                <a href="#slide-1">1</a>
                <a href="#slide-2">2</a>
                <a href="#slide-3">3</a>
                <a href="#slide-4">4</a>
            </div>
        </div>
    </div>
    <!-- ***************  DESTINATION  **************** -->
    <div class="content-destination">
            <h1>ENJOY</h1>
            <h2>Destinasi</h2>
            <p>Purwakarta lebih dari hanya sekedar kota Kecil, banyak hal yang dapat dilihat dan dilakukan di Purwakarta. Wisata adalah daya tarik yang dimiliki oleh Purwakarta, bahkan segala bentuk kegiatan wisata dapat dilakukan di Purwakarta</p>
    </div>
    <div class="background-destination" id="back">
        <h1> - Travel Inspiration -</h1>
        <div class="content-travel">
            <ul class="gallery">
                <li>
                    <a href="#gambar-1">
                        <img src="image/200-1.2.jpg" alt="Sribaduga">
                        <span>Air Mancur Sribaduga</span>
                    </a>

                    <div class="overlay" id="gambar-1">
                        <a href="#back" class="close">x close</a>
                        <a href="#gambar-10" class="prev">prev</a>
                        <img src="image/fZ-1.jpg" alt="Sriabaduga">
                        <a href="#gambar-2" class="next">next</a>
                    </div>
                </li>

                <li>
                    <a href="#gambar-2">
                        <img src="image/200-2.jpg" alt="Bale Indung">
                        <span>Bale Indung Rahayu</span>
                    </a>

                    <div class="overlay" id="gambar-2">
                        <a href="#back" class="close">x close</a>
                        <a href="#gambar-1" class="prev">prev</a>
                        <img src="image/fz-2.jpg" alt="Bale Indung">
                        <a href="#gambar-3" class="next">next</a>
                    </div>
                </li>

                <li>
                    <a href="#gambar-3">
                        <img src="image/200-3.jpg" alt="Gunung Parang">
                        <span>Gunung Parang</span>
                    </a>

                    <div class="overlay" id="gambar-3">
                        <a href="#back" class="close">x close</a>
                        <a href="#gambar-2" class="prev">prev</a>
                        <img src="image/fz-3.jpg" alt="Gunung Parang">
                        <a href="#gambar-4" class="next">next</a>
                    </div>
                </li>

                <li>
                    <a href="$gambar-4">
                        <img src="image/200-4.jpg" alt="Waduk Jatiluhur">
                        <span>Waduk Jatiluhur</span>
                    </a>

                    <div class="overlay" id="gambar-4">
                        <a href="#back" class="close">x close</a>
                        <a href="#gambar-3" class="prev">prev</a>
                        <img src="image/fz-4.jpg" alt="Waduk Jatiluhur">
                        <a href="#gambar-5" class="next">next</a>
                    </div>
                </li>
                <li>
                    <a href="#gambar-5">
                        <img src="image/200-5.jpg" alt="Hidden Valley Hills">
                        <span>Hidden Valley Hills</Var></span>
                    </a>

                    <div class="overlay" id="gambar-5">
                        <a href="#back" class="close">x close</a>
                        <a href="#gambar-4" class="prev">prev</a>
                        <img src="image/fz-5.jpg" alt="Hidden Valley Hills">
                        <a href="#gambar-6" class="next">next</a>
                    </div>
                </li>

                <li>
                    <a href="#gambar-6">
                        <img src="image/200-6.jpg" alt="Taman Batu Cijanun">
                        <span>Taman Batu Cijanun</span>
                    </a>

                    <div class="overlay" id="gambar-6">
                        <a href="#back" class="close">x close</a>
                        <a href="#gambar-5" class="prev">prev</a>
                        <img src="image/fz-6.jpg" alt="Taman Batu Cijanun">
                        <a href="#gambar-7" class="next">next</a>
                    </div>
                </li>

                <li>
                    <a href="#gambar-7">
                        <img src="image/200-7.jpg" alt="Galeri Wayang">
                        <span>Galeri Wayang</span>
                    </a>

                    <div class="overlay" id="gambar-7">
                        <a href="#back" class="close">x close</a>
                        <a href="#gambar-6" class="prev">prev</a>
                        <img src="image/fz-7.jpg" alt="Galeri Wayang">
                        <a href="#gambar-8" class="next">next</a>
                    </div>
                </li>

                <li>
                    <a href="#gambar-8">
                        <img src="image/200-8.jpg" alt="Parang Gombong">
                        <span>Parang Gombong</span>
                    </a>

                    <div class="overlay" id="gambar-8">
                        <a href="#back" class="close">x close</a>
                        <a href="#gambar-7" class="prev">prev</a>
                        <img src="image/fz-8.jpg" alt="Parang Gombong">
                        <a href="#gambar-9" class="next">next</a>
                    </div>
                </li>

                <li>
                    <a href="#gambar-9">
                        <img src="image/200-9.jpg" alt="Gunung Lembu">
                        <span>Gunung Lembu</span>
                    </a>

                    <div class="overlay" id="gambar-9">
                        <a href="#back" class="close">x close</a>
                        <a href="#gambar-8" class="prev">prev</a>
                        <img src="image/fz-9.jpg" alt="Gunung Lembu">
                        <a href="#gambar-10" class="next">next</a>
                    </div>
                </li>

                <li>
                    <a href="#gambar-10">
                        <img src="image/200-10.jpg" alt="Bale Panyawangan Diorama">
                        <span>Bale Panyawangan</span>
                    </a>

                    <div class="overlay" id="gambar-10">
                        <a href="#back" class="close">x close</a>
                        <a href="#gambar-9" class="prev">prev</a>
                        <img src="image/fz-10.jpg" alt="Bale Panyawangan Diorama">
                        <a href="#gambar-1" class="next">next</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
     <!-- ***************  MAP  **************** -->
    <div class ="content-map">
        <div class="box-map">
            <h1>EXPLORE</h1>
            <h2>NEIGHBORHOOD</h2>
            <p>Menyajikan seluruh cerita dari setiap sudut Purwakarta</p>
        </div>
    </div>
    <div class="background-map">
        <ul class="gallery-map">
            <li><img src="image/babakancikao.jpg" alt=""><span class="text-map">Kecamatan Babakan Cikao</span></li>
            <li><img src="image/bojong.jpg" alt=""><span class="text-map">Kecamatan Bojong</span></li>
            <li><img src="image/bungursari.jpg" alt=""><span class="text-map">Kecamatan Bungursari</span></li>
            <li><img src="image/campaka.jpg" alt=""><span class="text-map">Kecamatan Campaka</span></li>
            <li><img src="image/cibatu.jpg" alt=""><span class="text-map">Kecamatan Cibatu</span></li>
            <li><img src="image/darangdan.jpg" alt=""><span class="text-map">Kecamatan Darangdan</span></li>
            <li><img src="image/jatiluhur.jpg" alt=""><span class="text-map">Kecamatan Jatiluhur</span></li>
            <li><img src="image/kiarapedes.jpg" alt=""><span class="text-map">Kecamatan Kiarapedes</span></li>
            <li><img src="image/maniis.jpg" alt=""><span class="text-map">Kecamatan Maniis</span></li>
            <li><img src="image/pasawahan.jpg" alt=""><span class="text-map">Kecamatan Pasawahan</span></li>
            <li><img src="image/plered.jpg" alt=""><span class="text-map">Kecamatan Plered</span></li>
            <li><img src="image/pondoksalam.jpg" alt=""><span class="text-map">Kecamatan Pondok Salam</span></li>
            <li><img src="image/purwakarta.jpg" alt=""><span class="text-map">Kecamatan Purwakarta</span></li>
            <li><img src="image/sukasari.jpg" alt=""><span class="text-map">Kecamatan Sukasari</span></li>
            <li><img src="image/sukatani.jpg" alt=""><span class="text-map">Kecamatan Sukatani</span></li>
            <li><img src="image/tegalwaru.jpg" alt=""><span class="text-map">Kecamatan Tegal Waru</span></li>
            <li><img src="image/wanayasa.jpg" alt=""><span class="text-map">Kecamatan Wanayasa</span></li>
        </ul>


    </div>
    <!-- ***************  CONTACT INFO  **************** -->
    <div class="background-contact">
        <div class="contact-info">
            <div class="contact">
                <img src="image/pwkistimewa.jpeg">
            </div>
            <div class="contact">
                <h2>Contact Info</h2>
                <p>Jl. Ipik Gandamanah No.42</p>
                <p>08777789889</p>
                <p>purwakartatourism@gmail.com</p>
            </div>
            <!-- <div class="contact">
                <h2>Legal</h2>
                <p><a href="#">Syarat & Ketentuan</a></p>
                <p><a href="#">Privacy Policy</a></p>
            </div> -->
        </div>
            <div class="contact2">
                <ul class="contact-list">
                    <li><a href="#" target="_blank"><img src="image/instagram.png"></a></li>
                    <li><a href="#" target="_blank"><img src="image/youtube.png"></a></li>
                    <li><a href="#" target="_blank"><img src="image/tiktok.png"></a></li>
                    <li><a href="#" target="_blank"><img src="image/twitter.png"></a></li>
                </ul>
                <h2>Design & Development by LifeOnPurwakarta</h2>
            </div>

    </div>
</body>
</html>