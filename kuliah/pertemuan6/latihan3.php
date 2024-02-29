<?php 
// array associative
// array yang indeksnya adalah string yang kita buat sendiri
$mahasiswa = [
[
    'nama' => 'Hailynn Callisto', 
    'makanan' => ['🥞', '🍕'], 
    'peliharaan' => '🦢'
], 
[
    'nama' => 'Raphael Kedrey', 
    'makanan' => [], 
    'peliharaan' => '🕊️'
], 
[
    'nama' => 'Dena Astia', 
    'makanan' => ['🍰'], 
    'peliharaan' => '🐬' 
], 
[
    'nama' => 'Cayena Hill', 
    'makanan' => ['🍩', '🍜', '🥗'], 
    'peliharaan' => '🦋'
], 
[
    'nama' => 'Rezef Hill',  
    'makanan' => ['🍙'], 
    'peliharaan' => '🐞'
],
[
    'nama' => 'Ditrian Genos',  
    'makanan' => ['🥐', '🍗'], 
    'peliharaan' => '🐩'
],
[
    'nama' => 'Rudbeckia Borgia',  
    'makanan' => ['🌯'], 
    'peliharaan' => '🦉'
],
[
    'nama' => 'Iske van Omerta',  
    'makanan' => ['🍣', '🥮' ,'🥪'], 
    'peliharaan' => '🐅'
],
[
    'nama' => 'Jeremy Agriche',  
    'makanan' => ['🍟', '🍳', '🥧'], 
    'peliharaan' => '🐈'
],
[
    'nama' => 'Juvellian Elloi Floyen',  
    'makanan' => ['🍪'], 
    'peliharaan' => '🐇'
],


];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $m) { ?>
    <ul>
        <li>Nama : <?= $m['nama']; ?></li>
        <li>Peliharaan : <?= $m['peliharaan']; ?></li>
        <li>Makanan Favorit : 
            <?php foreach($m['makanan'] as $m) {
                echo $m;
            } ?>
        </li>
    </ul>
    <?php } ?>
</body>
</html>