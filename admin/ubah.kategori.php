<?php 
session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../user/login.php");
    exit;

}
require "../functions.php";

$id_kategori = $_GET["id_kategori"];

$id_kategori = query("SELECT * FROM kategori WHERE id_kategori = $id_kategori")[0];

if(isset($_POST['ubah'])) {
  // tampilkan pesan jika data berhasil ditambahkan
  if (ubah($_POST) > 0) {
      echo "<script>
              alert('data berhasil diubah!');
              document.location.href = 'kategori.view.php';
          </script>
        ";
  } else {
    echo "
        <script> 
            alert('data gagal diubah!);
            document.location.href = 'kategori.view.php'
    ";
  }
}
?>

<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>Ubah Kategori</h1>

  <div class="row">
    <div class="col-md-8">
      <form action="" method="post">
        <input type="hidden" name="id_kategori" value="<?= $id_kategori["id_kategori"]; ?>">
        <div class="mb-3 w-25">
          <label for="nama_kategori" class="form-label">Kategori</label>
          <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" value="<?= $id_kategori["nama_kategori"]; ?>" autofocus required >
        </div>
        <div class="mb-3">
          <label for="gambar_kategori" class="form-label">Gambar</label>
          <input type="file" class="form-control" name="gambar_kategori" id="gambar_kategori" value="<?= $id_kategori["gambar_kategori"]; ?>" >
        </div>
        <div class="mb-3">
          <label for="deskripsi_kategori" class="form-label">Deskripsi</label>
          <input type="text" class="form-control" name="deskripsi_kategori" id="deskripsi_kategori" value="<?= $id_kategori["deskripsi_kategori"]; ?>" >
        </div>
        <input type="submit" name="ubah" value="Ubah Data" class="btn btn-primary">
      </form>
    </div>
  </div>

</div>

<?php require('partials/footer.php'); ?>