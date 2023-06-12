<?php 
session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../user/login.php");
    exit;

}

require '../functions.php' ;

// $category = query("SELECT * FROM kategori");

if (isset($_GET['search'])) {
  $keyword = $_GET['keyword'];
  $query = "SELECT * FROM
              kategori
              WHERE
                  nama_kategori LIKE '%$keyword%' 
                  ";
  $category = query($query);
} else {
  $category = query("SELECT * FROM kategori");
}

?>

<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">

  <h3>Daftar Kategori</h3>

  <a href="tambah.kategori.php" class="btn btn-primary">Tambah Kategori</a>
  <br><br>
  <span class="material-symbols-outlined">
    <a href="print.kategori.php" target="_blank">print</a>
  </span>
  <p>Print</p>

  <div class="row">
    <div class="col-md-6">
      <form action="" method="get">
      <div class="input-group my-3">
        <input type="search" class="form-control" placeholder="Masukkan Keyword ... " name="keyword" id="keyword" autofocus autocomplete="off">
        <button class="btn btn-primary" type="submit" name="search" id="search">Search</button>
      </div>
      </form>
    </div>
  </div>

  <div id="search-container">
  <?php if($category) :  ?>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">ID Kategori</th>
        <th scope="col">Kategori</th>
        <th scope="col">Gambar</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($category as $c) : ?>
        <tr>
          <th scope="row"><?= $i++; ?></th>
          <td><?= $c['id_kategori']; ?></td>
          <td><?= $c['nama_kategori']; ?></td>
          <td>
            <img src="image/<?= $c['gambar_kategori']; ?>" width="50">
          </td>
          <td><?= $c['deskripsi_kategori']; ?></td>
          <td>
            <a href="ubah.kategori.php?id_kategori=<?= $c["id_kategori"]; ?>" class="badge badge-warning">ubah</a> |
            <a href="hapus.kategori.php?id_kategori=<?= $c["id_kategori"]; ?>" class="badge badge-danger">hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <?php else : ?>
    <div class="row">
      <div class="col-md-6">
      <div class="alert alert-danger" role="alert">
        Category(s) not found!
      </div>
      </div>
    </div>
  <?php endif ; ?>
  </div>
</div>

<?php require('partials/footer.php'); ?>