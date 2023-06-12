<?php 
session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../user/login.php");
    exit;

}
require "../functions.php";

$id_tempat = $_GET['id_tempat'];

$id_tempat = query("SELECT * FROM tempat WHERE id_tempat = '$id_tempat'")[0];

$category = query("SELECT * FROM kategori");

if(isset($_POST['ubahTempat'])) {
  // tampilkan pesan jika data berhasil ditambahkan
  if (ubahTempat($_POST) > 0) {
      echo "<script>
              alert('data berhasil diubah!');
              document.location.href = 'tempat.view.php';
          </script>
        ";
  } else {
    echo "
        <script> 
            alert('data gagal diubah!);
            document.location.href = 'tempat.view.php';
        </script>
    ";
  }
}
?>

<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>Ubah Item</h1>

  <div class="row">
    <div class="col-md-8">
      <form action="" method="post" enctype="multipart/form-data">
         <input type="hidden" name="id_tempat" value="<?= $id_tempat['id_tempat']; ?> ">
      <div class="mb-3 w-25">
          <label for="nama_kategori" class="form-label">Kategori</label>
          <select name="id_kategori" class="form-control">
            <option value="">Pilih Kategori</option>
            <?php foreach($category as $c): ?>
                <option value="<?= $c['id_kategori'] ?>" <?= ($c['id_kategori'] == $id_tempat['id_kategori'] ) ? 'selected': ''; ?>>
                <?= $c['nama_kategori']; ?>
              </option>
                <?php endforeach; ?>
          </select>
        </div>
        <div class="mb-3 w-25">
          <label for="nama_tempat" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama_tempat" id="nama_tempat" value="<?= $id_tempat['nama_tempat']; ?>" >
        </div>
        <div class="mb-3">
          <label for="gambar_tempat" class="form-label">Gambar</label>
          <input type="file" class="form-control" name="gambar_tempat" id="gambar_tempat" value="<?= $id_tempat['gambar_tempat']; ?> " >
        </div>
        <div class="mb-3">
          <label for="harga_tempat" class="form-label">Harga</label>
          <input type="text" class="form-control" name="harga_tempat" id="harga_tempat" value="<?= $id_tempat['harga_tempat']; ?> " >
        </div>
        <div class="mb-3">
          <label for="deskripsi_tempat" class="form-label">Deskripsi</label>
          <input type="text" class="form-control" name="deskripsi_tempat" id="deskripsi_tempat" value="<?= $id_tempat['deskripsi_tempat']; ?> ">
        </div>
        <div class="mb-3">
          <label for="rating_tempat" class="form-label">Rating</label>
          <input type="text" class="form-control" name="rating_tempat" id="rating_tempat" value="<?= $id_tempat['rating_tempat']; ?> ">
        </div>
        <input type="submit" name="ubahTempat" value="Ubah Data" class="btn btn-primary">
      </form>
    </div>
  </div>

</div>

<?php require('partials/footer.php'); ?>