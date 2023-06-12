<?php 
require '../../functions.php';

 $keywordItem = $_GET['keywordItem'];
 $query = "SELECT * FROM tempat
            INNER JOIN kategori
            ON tempat.id_kategori = kategori.id_kategori
             WHERE
                 nama_tempat LIKE '%$keywordItem%'
                 ";
 $place = query($query);
 
?>

<?php if($place) :  ?>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Kategori</th>
        <th scope="col">Nama</th>
        <th scope="col">Gambar</th>
        <th scope="col">Harga</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Rating</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($place as $p) : ?>
        <tr>
          <th scope="row"><?= $i++; ?></th>
          <td><?= $p['id_kategori']; ?></td>
          
          <td><?= $p['nama_tempat']; ?></td>
          <td>
            <img src="image/<?= $p['gambar_tempat']; ?>" width="50">
          </td>
          <td><?= $p['harga_tempat']; ?></td>
          <td><?= $p['deskripsi_tempat']; ?></td>
          <td><?= $p['rating_tempat']; ?></td>
          <td>
            <a href="ubah.tempat.php?id_tempat=<?= $p['id_tempat']; ?>" class="badge text-bg-warning">ubah</a> |
            <a href="hapus.tempat.php?id_tempat=<?= $p['id_tempat']; ?>" class="badge text-bg-danger">hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <?php else : ?>
    <div class="row">
      <div class="col-md-6">
      <div class="alert alert-danger" role="alert">
        Item(s) not found!
      </div>
      </div>
    </div>
  <?php endif ; ?>