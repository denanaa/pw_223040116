<?php
session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../user/login.php");
    exit;

}

require '../functions.php' ;

// if (!isset($_SESSION['admin'])) {
//   header("location: index.php");
//   exit;
// }

?>


<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

          <div class="dashboard-content px-3 pt-4">
            <h2 class="fs-5">Dashboard</h2>
            
            
            <div class="row">
              <div class="col-md-3">
                <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                  <div class="card-header">Category</div>
              <div class="card-body">
                <h5 class="card-title">3 Kategori</h5>
                <a href="kategori.view.php">Lihat Detail</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
              <div class="card-header">Items</div>
              <div class="card-body">
                <h5 class="card-title">10 Tempat</h5>
                <a href="tempat.view.php">Lihat Detail</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
              <div class="card-header">Users</div>
              <div class="card-body">
                <h5 class="card-title">+ Pengguna</h5>
                <a href="admin.view.php">Lihat Detail</a>
              </div>
            </div>
          </div>
          
        </div>
      </div>

  <?php require('partials/footer.php'); ?>