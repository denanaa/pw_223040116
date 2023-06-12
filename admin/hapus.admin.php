<?php 

session_start();

if (!isset($_SESSION["login2"])) {
    header("Location: ../user/login.php");
    exit;

}

require '../functions.php';

$id = $_GET['id'];

if ( hapusAdmin($id) > 0) {
    echo "
            <script>
                alert('data berhasil dihapus!');
                document.location.href='admin.view.php';
            </script>
        ";

} else {
    echo "
        <script> 
            alert('data gagal dihapus!');
            document.location.href='admin.view.php';
        </script>
    ";
}

?>