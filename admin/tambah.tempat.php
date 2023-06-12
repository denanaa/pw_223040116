<?php 

session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../user/login.php");
    exit;

}

require "../functions.php";

$kategori = query("SELECT * FROM kategori");

if(isset($_POST['insert'])) {
  // tampilkan pesan jika data berhasil ditambahkan
  if (insert($_POST) > 0) {
      echo "<script>
              alert('data berhasil ditambahkan!');
              document.location.href = 'tempat.view.php';
          </script>";
  } else {
    echo "<script>
              alert('udah ada blok!');
              document.location.href = 'tambah.kategori.php';
          </script>";
  }
}
?>

<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>Tambah Items</h1>

  <div class="row">
    <div class="col-md-8">
      <form action="" method="post" enctype="multipart/form-data">
      <div class="mb-3 w-25">
          <label for="nama_kategori" class="form-label">Kategori</label>
          <select name="id_kategori" class="form-control">
            <option value="">Pilih Kategori</option>
            <?php foreach($kategori as $k): ?>
                <option value="<?= $k['id_kategori'] ?>"><?= $k['nama_kategori'] ?></option>
                <?php endforeach; ?>
          </select>
        </div>
        <div class="mb-3 w-25">
          <label for="nama_kategori" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama_tempat" id="nama_tempat" autofocus required>
        </div>
        <div class="mb-3">
          <label for="gambar_kategori" class="form-label">Gambar</label>
          <input type="file" class="form-control" name="gambar_tempat" id="gambar_tempat">
        </div>
        <div class="mb-3">
          <label for="deskripsi_kategori" class="form-label">Harga</label>
          <input type="text" class="form-control" name="harga_tempat" id="harga_tempat">
        </div>
        <div class="mb-3">
          <label for="deskripsi_kategori" class="form-label">Deskripsi</label>
          <input type="text" class="form-control" name="deskripsi_tempat" id="deskripsi_tempat">
        </div>
        <div class="mb-3">
          <label for="deskripsi_kategori" class="form-label">Rating</label>
          <input type="text" class="form-control" name="rating_tempat" id="rating_tempat">
        </div>
        <input type="submit" name="insert" value="Tambah Data" class="btn btn-primary">
      </form>
    </div>
  </div>

</div>

<?php require('partials/footer.php'); ?>