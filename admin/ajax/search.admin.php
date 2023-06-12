<?php 
require '../../functions.php';

 $keywordUser = $_GET['keywordUser'];
 $query = "SELECT * FROM
             admin
             WHERE
                 username LIKE '%$keywordUser%'
                 ";
 $user= query($query);

 ?>

 <?php if($user) :  ?>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
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