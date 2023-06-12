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
            <h4>HOME / SEE N DO</h4>
        </div>
    </section>

    <section class="container">

    <?php foreach ($place as $p) : ?>
        <?php if($p['id_kategori'] == '20') : ?>
    <div class="card">
        <div class="head-card">
            <img src="../admin/image/<?= $p['gambar_tempat']; ?>" width="50">
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
            <h1>Taman Air Mancur Sribaduga</h1>
            <p>Pusat Kota Purwakarta, Purwakarta</p>
            <h3>Taman Air Mancur</h3>
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
            <img src="image/harper.jpeg" alt="">
        </div>
        <div class="body-card">
            <h1>Gunung Parang</h1>
            <p>Plered, Purwakarta</p>
            <h3>Gunung</h3>
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
            <h1>Waduk Jatiluhur</h1>
            <p>Jatiluhur, Purwakarta</p>
            <h3>Danau</h3>
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
            <h1>Bale Panyawangan Diorama</h1>
            <p>Pusat Kota Purwakarta, Purwakarta</p>
            <h3>Museum</h3>
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
            <h1>Parang Gombong</h1>
            <p>Jatiluhur, Purwakarta</p>
            <h3>Danau</h3>
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
            <h1>Masjid Agung Tajug Gede</h1>
            <p>Bungursari, Purwakarta</p>
            <h3>Masjid</h3>
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
            <h1>Taman Batu Cijanun</h1>
            <p>Bojong, Purwakarta</p>
            <h3>Tempat Rekreasi</h3>
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
            <h1>Bale Indung Rahayu</h1>
            <p>Pusat Kota Purwakarta, Purwakarta</p>
            <h3>Museum</h3>
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
            <h1>Cikao Park</h1>
            <p>Jatiluhur, Purwakarta</p>
            <h3>Taman Rekreasi</h3>
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
            <h1>Tebing Boyer</h1>
            <p>Sukatani, Purwakarta</p>
            <h3>Tempat Rekreasi</h3>
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
            <h1>Hidden Valley Hills</h1>
            <p>Sukatani, Purwakarta</p>
            <h3>Resort</h3>
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
            <h1>Curug Cipurut</h1>
            <p>Wanayasa, Purwakarta</p>
            <h3>Air Terjun</h3>
            <div class="rating">
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
            </div>
        </div>
    </div> -->
    </section>



<?php require('partials/footer.php'); ?>