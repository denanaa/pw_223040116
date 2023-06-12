<?php 
require '../../functions.php';

 $keyword = $_GET['keyword'];
 $query = "SELECT * FROM
             kategori
             WHERE
                 nama_kategori LIKE '%$keyword%'
                 ";
 $category = query($query);
 
?>


<?php if($category) :  ?>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
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
          <td><?= $c['nama_kategori']; ?></td>
          <td>
            <img src="image/<?= $c['gambar_kategori']; ?>" width="50">
          </td>
          <td><?= $c['deskripsi_kategori']; ?></td>
          <td>
            <a href="ubah.kategori.php?id_kategori=<?= $c["id_kategori"]; ?>" class="badge text-bg-warning">ubah</a> |
            <a href="hapus.kategori.php?id_kategori=<?= $c["id_kategori"]; ?>" class="badge text-bg-danger">hapus</a>
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