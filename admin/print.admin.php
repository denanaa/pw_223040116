<?php 

session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../user/login.php");
    exit;

}

require_once __DIR__ . '/../vendor/autoload.php';

require '../functions.php' ;

$user = query("SELECT * FROM admin");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kategori</title>
    <link rel="stylesheet" href="css/print.css">
</head>
<body>
    <h3>Daftar Users</h3>

    <table border="1" cellpading="10" cellspacing="0">

      <tr class="bd">
        <th scope="col">ID</th>
        <th scope="col">Email</th>
        <th scope="col">Username</th>
        <th scope="col">Passwrod</th>
      </tr>';

      $i = 1;
      foreach ($user as $users) {
        $html .= '<tr>
            <td>'. $i++ .'</td>
            <td>'. $users["email"] .'</td>
            <td>'. $users["username"] .'</td>
            <td>'. $username["password"] .'</td>
        </tr>';
      }

$html .=   '</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output ();

?>