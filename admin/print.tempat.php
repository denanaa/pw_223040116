<?php 

session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../user/login.php");
    exit;

}
require_once __DIR__ . '/../vendor/autoload.php';

require '../functions.php' ;

$place = query("SELECT * FROM tempat 
                    INNER JOIN kategori
                    ON tempat.id_kategori = kategori.id_kategori ");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kategori</title>
    <link rel="stylesheet" href="css/print.css">
</head>
<body>
    <h3>Daftar Item</h3>

    <table border="1" cellpading="10" cellspacing="0">

      <tr class="bd">
        <th scope="col">ID</th>
        <th scope="col">Kategori</th>
        <th scope="col">Nama</th>
        <th scope="col">Gambar</th>
        <th scope="col">Harga</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Rating</th>
      </tr>';

      $i = 1;
      foreach ($place as $p) {
        $html .= '<tr>
            <td>'. $i++ .'</td>
            <td>'. $p["nama_kategori"] .'</td>
            <td>'. $p["nama_tempat"] .'</td>
            <td><img src="image/'. $p["gambar_tempat"] .'" width="50px"></td>
            <td>'. $p["harga_tempat"] .'</td>
            <td>'. $p["deskripsi_tempat"] .'</td>
            <td>'. $p["rating_tempat"] .'</td>
        </tr>';
      }

$html .=   '</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output ();

?>
