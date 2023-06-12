<?php 

session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../user/login.php");
    exit;

}

require '../functions.php' ;

$place = query("SELECT * FROM tempat 
                    INNER JOIN kategori
                    ON tempat.id_kategori = kategori.id_kategori ");


if (isset($_GET['search'])) {
  $keywordUser = $_GET['keywordUser'];
  $query = "SELECT * FROM
              tempat
              WHERE
                  nama_tempat LIKE '%$keywordUser%' 
                  ";
  $place = query($query);
} else {
  $place = query("SELECT * FROM tempat
                    INNER JOIN kategori
                    ON tempat.id_kategori = kategori.id_kategori ");
}

?>


<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">

  <h3>Daftar Items</h3>

  <a href="tambah.tempat.php" class="btn btn-primary">Tambah Item</a>
  <br><br>

  <span class="material-symbols-outlined">
    <a href="print.kategori.php" target="_blank">print</a>
  </span>
  <p>Print</p>

  <div class="row">
    <div class="col-md-6">
      <form action="" method="get">
      <div class="input-group my-3">
        <input type="search" class="form-control" placeholder="Masukkan Keyword ... " name="keywordItem" id="keywordItem" autofocus autocomplete="off">
        <button class="btn btn-primary" type="submit" name="search" id="search">Search</button>
      </div>
      </form>
    </div>
  </div>

  <div id="search-container-item">
  <?php if($place) :  ?>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">ID Kategori</th>
        <th scope="col">ID Tempat</th>
        <th scope="col">Kategori</th>
        <th scope="col">Nama</th>
        <th scope="col">Gambar</th>
        <th scope="col">Harga</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Rating</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($place as $p) : ?>
        <tr>
          <th scope="row"><?= $i++; ?></th>
          <td><?= $p['id_kategori']; ?></td>
          <td><?= $p['id_tempat']; ?></td>
          <td><?= $p['nama_kategori']; ?></td>
          <td><?= $p['nama_tempat']; ?></td>
          <td>
            <img src="image/<?= $p['gambar_tempat']; ?>" width="50">
          </td>
          <td><?= $p['harga_tempat']; ?></td>
          <td><?= $p['deskripsi_tempat']; ?></td>
          <td><?= $p['rating_tempat']; ?></td>
          <td>
            <a href="ubah.tempat.php?id_tempat=<?= $p['id_tempat']; ?>" class="badge text-bg-warning">ubah</a> |
            <a href="hapus.tempat.php?id_tempat=<?= $p['id_tempat']; ?>" class="badge text-bg-danger">hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <?php else : ?>
    <div class="row">
      <div class="col-md-6">
      <div class="alert alert-danger" role="alert">
        Item(s) not found!
      </div>
      </div>
    </div>
  <?php endif ; ?>
  </div>
</div>

<?php require('partials/footer.php'); ?>