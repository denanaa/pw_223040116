<?php 

session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../user/login.php");
    exit;

}

require "../functions.php";

if(isset($_POST['tambah'])) {
  // tampilkan pesan jika data berhasil ditambahkan
  if (tambah($_POST) > 0) {
      echo "<script>
              alert('data berhasil ditambahkan!');
              document.location.href = 'kategori.view.php';
          </script>";
  } else 
  {
    echo "<script>
              alert('kategori sudah ada!');
              document.location.href = 'tambah.kategori.php';
          </script>";
  }
}
?>

<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>Tambah Kategori</h1>

  <div class="row">
    <div class="col-md-8">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3 w-25">
          <label for="nama_kategori" class="form-label">Kategori</label>
          <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" autofocus required>
        </div>
        <div class="mb-3">
          <label for="gambar_kategori" class="form-label">Gambar</label>
          <input type="file" class="form-control" name="gambar_kategori" id="gambar_kategori">
        </div>
        <div class="mb-3">
          <label for="deskripsi_kategori" class="form-label">Deskripsi</label>
          <input type="text" class="form-control" name="deskripsi_kategori" id="deskripsi_kategori">
        </div>
        <input type="submit" name="tambah" value="Tambah Data" class="btn btn-primary">
      </form>
    </div>
  </div>

</div>

<?php require('partials/footer.php'); ?>