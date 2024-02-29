<?php  

$mahasiswa = [
[
    'gambar' => 'loidforger.jpeg',
    'nrp' => '223040100',
    'nama' => 'Loid Forger',
    'email' => 'loidforger@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'marinkitagawa.jpeg',
    'nrp' => '223040101',
    'nama' => 'Marin Kitagawa',
    'email' => 'marinkitagawa@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'gojosatoru.jpeg',
    'nrp' => '223040102',
    'nama' => 'Gojo Satoru',
    'email' => 'gojosatoru@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'makima.jpeg',
    'nrp' => '223040103',
    'nama' => 'Makima',
    'email' => 'makima@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'bachirameguru.jpeg',
    'nrp' => '223040104',
    'nama' => 'Bachira Meguru',
    'email' => 'bachirameguru@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'vladilenamilize.jpeg',
    'nrp' => '223040105',
    'nama' => 'Vladilena Milize',
    'email' => 'vladilenamilize@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'kazutokirigaya.jpeg',
    'nrp' => '223040106',
    'nama' => 'Kazuto Kirigaya',
    'email' => 'kazutokirigaya@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'horikyouko.jpeg',
    'nrp' => '223040107',
    'nama' => 'Hori Kyouko',
    'email' => 'horikyouko@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'shineinouzen.jpeg',
    'nrp' => '223040108',
    'nama' => 'Shinei Nouzen',
    'email' => 'shineinouzen@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => 'yorforger.jpeg',
    'nrp' => '223040109',
    'nama' => 'Yor Forger',
    'email' => 'yorforger@gmail.com',
    'jurusan' => 'Teknik Informatika'
],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
</head>
<body>
<h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $m) { ?>
    <ul>
        <li>
            <img src="img/<?= $m['gambar']; ?>" width = 200px >
        </li>
        <li>NRP : <?= $m['nrp']; ?></li>
        <li>Nama : <?= $m['nama']; ?></li>
        <li>Email : <?= $m['email']; ?></li>
        <li>Jurusan : <?= $m['jurusan']; ?></li>
        </li>
    </ul>
    <?php } ?>
</body>
</html>