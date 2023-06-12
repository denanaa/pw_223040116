<?php 
session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../user/login.php");
    exit;

}
require "../functions.php";

$id = $_GET["id"];

$id = query("SELECT * FROM admin WHERE id = $id")[0];

if(isset($_POST['ubahAdmin'])) {
  // tampilkan pesan jika data berhasil ditambahkan
  if (ubahAdmin($_POST) > 0) {
      echo "<script>
              alert('data berhasil diubah!');
              document.location.href = 'admin.view.php';
          </script>
        ";
  } else {
    echo "
        <script> 
            alert('data gagal diubah!);
            document.location.href = 'admin.view.php'
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
        <input type="hidden" name="id" value="<?= $id["id"]; ?>">
        <div class="mb-3 w-25">
          <label for="nama_kategori" class="form-label">Email</label>
          <input type="text" class="form-control" name="email" id="email" value="<?= $id["email"]; ?>" autofocus required >
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" name="username" id="username" value="<?= $id["username"]; ?>" >
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="text" class="form-control" name="password" id="password" value="<?= $id["password"]; ?>" >
        </div>
        <input type="submit" name="ubahAdmin" value="Ubah Data" class="btn btn-primary">
      </form>
    </div>
  </div>

</div>

<?php require('partials/footer.php'); ?>