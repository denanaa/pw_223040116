<?php 

session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../user/login.php");
    exit;

}

require_once __DIR__ . '/../vendor/autoload.php';

require '../functions.php' ;

$category = query("SELECT * FROM kategori");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kategori</title>
    <link rel="stylesheet" href="css/print.css">
</head>
<body>
    <h3>Daftar Kategori</h3>

    <table border="1" cellpading="10" cellspacing="0">

      <tr class="bd">
        <th scope="col">ID</th>
        <th scope="col">Kategori</th>
        <th scope="col">Gambar</th>
        <th scope="col">Deskripsi</th>
      </tr>';

      $i = 1;
      foreach ($category as $c) {
        $html .= '<tr>
            <td>'. $i++ .'</td>
            <td>'. $c["nama_kategori"] .'</td>
            <td><img src="image/'. $c["gambar_kategori"] .'" width="50px"></td>
            <td>'. $c["deskripsi_kategori"] .'</td>
        </tr>';
      }

$html .=   '</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output ();

?>
