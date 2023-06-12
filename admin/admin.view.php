<?php 

session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../user/login.php");
    exit;

}

require '../functions.php' ;

// $user = query("SELECT * FROM admin");

if (isset($_GET['search'])) {
  $keywordUser = $_GET['keywordUser'];
  $query = "SELECT * FROM
              admin
              WHERE
                  username LIKE '%$keywordUser%' 
                  ";
  $user = query($query);
} else {
  $user = query("SELECT * FROM admin");
}

?>

<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">

  <h3>Daftar Users</h3>


  <span class="material-symbols-outlined">
    <a href="print.kategori.php" target="_blank">print</a>
  </span>
  <p>Print</p>

  <!-- <a href="tambah.kategori.php" class="btn btn-primary">Tambah Kategori</a> -->

  <div class="row">
    <div class="col-md-6">
      <form action="" method="get">
      <div class="input-group my-3">
        <input type="search" class="form-control" placeholder="Masukkan Keyword ... " 
        name="keywordUser" id="keywordUser" autofocus autocomplete="off">
        <button class="btn btn-primary" type="submit" name="search" id="search">Search</button>
      </div>
      </form>
    </div>
  </div>

  <div id="search-container-user">
  <?php if($user) :  ?>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">Email</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($user as $users) : ?>
        <tr>
          <th scope="row"><?= $i++; ?></th>
          <td><?= $users['email']; ?></td>
          <td><?= $users['username']; ?></td>
          <td><?= $users['password']; ?></td>
          <td>
            <a href="ubah.admin.php?id=<?= $users["id"]; ?>" class="badge text-bg-warning">ubah</a> |
            <a href="hapus.admin.php?id=<?= $users["id"]; ?>" class="badge text-bg-danger">hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <?php else : ?>
    <div class="row">
      <div class="col-md-6">
      <div class="alert alert-danger" role="alert">
        User(s) not found!
      </div>
      </div>
    </div>
  <?php endif ; ?>
  </div>
</div>

<?php require('partials/footer.php'); ?>