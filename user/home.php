<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purwakarta</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</head>
<body>

    <header>
        <a href="#" class="logo"><img src="image/pwkistimewa.jpeg" alt=""></a>

        <ul class="navmenu">
            <li><a href="#home">HOME</a></li>
            <li><a href="#category">CATEGORY</a></li>
            <li><a href="#destinations">DESTINATIONS</a></li>
        </ul>

        <div class="btn-icon">
            <a href="lognreg.php" class="nav-btn"><i class="material-icons">logout</i></a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header> -->

    <?php 
    
    require '../functions.php' ;
    

    $category = query("SELECT * FROM kategori");

    ?>

    <?php require('partials/header.php'); ?>
    <?php require('partials/nav.php'); ?>

    <!-- home section -->
    <section class="home" id="home">
        <div class="home-text">
            <h4>Selamat Datang di Purwakarta</h4>
            <h1>Travel, enjoy and live <br> Purwakarta </h1>
            <p>Kota Kecil yang memiliki sejuta kenangan dan dijuluki sebagai 'Kota Pensiun' karena Suasananya jauh dari hiruk pikuk kendaraan dan lalu lalang manusia.<br>
            Rumah bagi lebih dari 900 ribu orang dengan beragam latar belakang yang berbeda. Terletak di dalam provinsi Jawa Barat, Kabupaten Purwakarta telah berkembang pesat selama bertahun-tahun.</p>

            <div class="button">
                <a href="home.php #category" class="btn1">Find out more</a>
            </div>
        </div>
    </section>

    <!-- category-section -->
    <section class="category" id="category">
        <div class="center-text">
            <h4>category</h4>
            <h2>Best of Purwakarta</h2>
        </div>

        <div class="cate-pro">

        <?php foreach ($category as $c) : ?>

            <?php if($c['id_kategori'] == "1") {  ?>
            <a href="stay.php?id=<?= $c['id_kategori']; ?>">
                <?php }elseif($c['id_kategori'] == "7") { ?>
                    <a href="eatndrink.php?id=<?= $c['id_kategori']; ?>">
                        <?php }elseif($c['id_kategori'] == "20") { ?>
                        <a href="seendo.php?id=<?= $c['id_kategori']; ?>">
                        <?php } ?>
            <div class="row">
                <img src="image/<?= $c['gambar_kategori']; ?>">
                <h5><?= $c['nama_kategori']; ?></h5>
                <p><?= $c['deskripsi_kategori']; ?></p>
            </div></a>
        <?php endforeach; ?>
        

            <!-- <a href="eatndrink.php">
            <div class="row">
                <img src="image/satemaranggi.jpg" alt="">
                <h5>EAT&DRINK</h5>
                <p>Rekomendasi tempat makan atau minum yang harus dicicipi tentunya dengan kualitas makanan atau minuman yang patut untuk dicoba.</p>
            </div></a>

            <a href="seendo.php">
            <div class="row">
                <img src="image/wadukjtl.jpg" alt="">
                <h5>SEE&DO</h5>
                <p>Rekomendasi beberapa tempat yang harus dikunjungi dan didatangi karena terkenal dengan view yang bagus.</p>
            </div></a> -->

            <!-- <div class="row">
                <img src="image/parang.jpg" alt="">
                <h5>Gunung Parang</h5>
                <p>Gunung Purwakarta ini terkenal sebagai spot panjat tebing terbaik karena memiliki kemiringan dan juga jenis batuan yang pas untuk kegiatan rock climbing. Dengan ketinggian 963 meter dari permukaan laut (mdpl), gunung ini bisa dijelajahi melalui jalur pendakian maupun via ferrata.</p>
            </div> -->
        </div>
    </section>

    <!-- Destinations-section -->
    <section class="destination" id="destinations">
        <div class="dest-text">
            <h5>Purwakarta</h5>
            <h2>Top Destinations</h2>
        </div>

        <div class="main-dest">
            <div class="box">
                <div class="hov-img">
                    <img src="image/gunungparang.jpg" alt="">
                </div>

                <div class="box-text">
                    <div class="text-in">
                        <h5>Gunung Parang</h5>
                    </div>
                    <h6 class="coun-text">Tegalwaru</h6>
                </div>
            </div>

            <div class="box">
                <div class="hov-img">
                    <img src="image/tamansribaduga.jpg" alt="">
                </div>

                <div class="box-text">
                    <div class="text-in">
                        <h5>Air Mancur Sribaduga</h5>
                    </div>
                    <h6 class="coun-text">Purwakarta</h6>
                </div>
            </div>

            <div class="box">
                <div class="hov-img">
                    <img src="image/wadukjatiluhur.jpg" alt="">
                </div>

                <div class="box-text">
                    <div class="text-in">
                        <h5>Waduk Jatiluhur</h5>
                    </div>
                    <h6 class="coun-text">Jatiluhur</h6>
                </div>
            </div>

            <div class="box">
                <div class="hov-img">
                    <img src="image/tajuggede.jpg" alt="">
                </div>

                <div class="box-text">
                    <div class="text-in">
                        <h5>Masjid Agung Tajug Gede</h5>
                    </div>
                    <h6 class="coun-text">Bungursari</h6>
                </div>
            </div>

            <div class="box">
                <div class="hov-img">
                    <img src="image/hutanjati.jpg" alt="">
                </div>

                <div class="box-text">
                    <div class="text-in">
                        <h5>Hutan Jati Cafe</h5>
                    </div>
                    <h6 class="coun-text">Purwakarta</h6>
                </div>
            </div>

            <div class="box">
                <div class="hov-img">
                    <img src="image/paranggombong.jpg" alt="">
                </div>

                <div class="box-text">
                    <div class="text-in">
                        <h5>Parang Gombong</h5>
                    </div>
                    <h6 class="coun-text">Jatiluhur</h6>
                </div>
            </div>

            <div class="box">
                <div class="hov-img">
                    <img src="image/diorama.jpg" alt="">
                </div>

                <div class="box-text">
                    <div class="text-in">
                        <h5>Bale Panyawangan Diorama</h5>
                    </div>
                    <h6 class="coun-text">Purwakarta</h6>
                </div>
            </div>

            <div class="box">
                <div class="hov-img">
                    <img src="image/hiddenvalley.jpg" alt="">
                </div>

                <div class="box-text">
                    <div class="text-in">
                        <h5>Hidden Valley Hills</h5>
                    </div>
                    <h6 class="coun-text">Sukatani</h6>
                </div>
            </div>

        </div>
    </section>

    <?php require('partials/footer.php'); ?>

    <!-- contact section -->
    <!-- <section class="footer">
        <ul class="contact-info">
            <li><a href="#"><img src="image/instagram.png" id="instagram"></a></li>
            <li><a href="#"><img src="image/github.png" id="whatsapp"></a></li>
            <li><a href="#"><img src="image/whatsapp.jpg" id="github"></a></li>
        </ul>
            <h2>Copyright © 2023 | LifeOnPurwakarta</h2>
    </section>

    <script src="java.js"></script>

</body>
</html> -->