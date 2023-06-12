<?php 

session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../user/login.php");
    exit;

}

require '../functions.php';

$id_tempat = $_GET['id_tempat'];

if ( hapusTempat($id_tempat) > 0) {
    echo "
            <script>
                alert('data berhasil dihapus!');
                document.location.href='tempat.view.php';
            </script>
        ";

} else {
    echo "
        <script> 
            alert('data gagal dihapus!');
            document.location.href='tempat.view.php';
        </script>
    ";
}

?>