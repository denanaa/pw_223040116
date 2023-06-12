<?php 

session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../user/login.php");
    exit;

}

require '../functions.php';

$id_kategori = $_GET["id_kategori"];

if ( hapusKategori ($id_kategori)) {
    echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href='kategori.view.php';
        </script>
    ";
} else {
    echo "
        <script> 
            alert('data gagal dihapus!');
            document.location.href='kategori.view.php';
        </script>
    ";
}

?>