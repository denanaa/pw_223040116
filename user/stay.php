<?php 
require '../functions.php' ;

$place = query("SELECT * FROM tempat 
                    INNER JOIN kategori
                    ON tempat.id_kategori = kategori.id_kategori ");

?>

<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>
    
    <section class="article" id="article">
        <div class="article-text">
        <i class="material-icons">home</i></a>
            <h4>HOME / STAY</h4>
        </div>
    </section>

    <section class="container">

    <?php foreach ($place as $p) : ?>
        <?php if($p['id_kategori'] == '1') : ?>
    <div class="card">
        <div class="head-card">
            <img src="../admin/image/<?= $p['gambar_tempat']; ?>">
        </div>
        <div class="body-card">
            <h1><?= $p['nama_tempat']; ?></h1>
            <p><?= $p['deskripsi_tempat']; ?></p>
            <h3><?= $p['harga_tempat']; ?></h3>
            <p>Rating : <?= $p['rating_tempat']; ?></p>
            <?php endif; ?>
        </div>
    </div>
    <?php endforeach; ?>
    

    <!-- <div class="card">
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
        </div>
    </div> -->

    <!-- <div class="card">
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
        </div>
    </div> -->
    </section>

<?php require('partials/footer.php'); ?>