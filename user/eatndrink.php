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
            <h4>HOME / EAT N DRINK</h4>
        </div>
    </section>

    <section class="container">

    <?php foreach ($place as $p) : ?>
        <?php if($p['id_kategori'] == '7') : ?>
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
            <img src="image/kmpungmaranggi.jpeg" alt="">
        </div>
        <div class="body-card">
            <h1>Kampung Maranggi</h1>
            <p>Plered, Purwakarta</p>
            <h3>Sate Maranggi</h3>
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
            <img src="image/sotosadang.jpeg" alt="">
        </div>
        <div class="body-card">
            <h1>Soto Sadang</h1>
            <p>Pusat Kota Purwakarta, Purwakarta</p>
            <h3>Soto</h3>
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
            <img src="image/rmciganea.jpeg" alt="">
        </div>
        <div class="body-card">
            <h1>RM Ibu Haji Ciganea</h1>
            <p>Pusat Kota Purwakarta, Purwakarta</p>
            <h3>Makanan Sunda</h3>
            <div class="rating">
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="head-card">
            <img src="image/sciming.jpg" alt="">
        </div>
        <div class="body-card">
            <h1>Es Ciming</h1>
            <p>Pusat Kota Purwakarta, Purwakarta</p>
            <h3>Es Ciming</h3>
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
            <img src="image/ayambakarkatineung.jpg" alt="">
        </div>
        <div class="body-card">
            <h1>Neng Katineung</h1>
            <p>Pusat Kota Purwakarta, Purwakarta</p>
            <h3>Ayam Bakar</h3>
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
            <img src="image/miegeo.png" alt="">
        </div>
        <div class="body-card">
            <h1>Mie Geo</h1>
            <p>Pusat Kota Purwakarta, Purwakarta</p>
            <h3>Mie</h3>
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
            <img src="image/mangkus.jpg" alt="">
        </div>
        <div class="body-card">
            <h1>Mang Kus</h1>
            <p>Pusat Kota Purwakarta, Purwakarta</p>
            <h3>Nasi Timbel</h3>
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
            <img src="image/geprekbudew.jpg" alt="">
        </div>
        <div class="body-card">
            <h1>Ayam Geprek Budew</h1>
            <p>Pusat Kota Purwakarta, Purwakarta</p>
            <h3>Ayam Geprek</h3>
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
            <img src="image/rmsedap.jpeg" alt="">
        </div>
        <div class="body-card">
            <h1>RM Sedap</h1>
            <p>Pusat Kota Purwakarta, Purwakarta</p>
            <h3>Aneka Makanan</h3>
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
            <img src="image/simpingkaum.jpg" alt="">
        </div>
        <div class="body-card">
            <h1>Simping Kaum</h1>
            <p>Pusat Kota Purwakarta, Purwakarta</p>
            <h3>Simping</h3>
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
            <img src="image/hutanjati.jpeg" alt="">
        </div>
        <div class="body-card">
            <h1>Hutan Jati</h1>
            <p>Pusat Kota Purwakarta, Purwakarta</p>
            <h3>Aneka Makanan</h3>
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
            <img src="image/hjyetty.jpg" alt="">
        </div>
        <div class="body-card">
            <h1>Hj. Yetty</h1>
            <p>Cibungur, Purwakarta</p>
            <h3>Sate Maranggi</h3>
            <div class="rating">
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
                <i class="material-icons">star</i>
            </div>
            <div class="buy">
                <h3>Check</h3>
            </div>
        </div> -->
    </section>



    <?php require('partials/footer.php'); ?>