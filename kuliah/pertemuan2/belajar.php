<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 2</title>
</head>
<body>
    <h1>
        <?php echo 'Hello, World!'; ?>
    </h1>
    <h3>
        <?php echo 'Pemrograman Web'; ?>
    </h3>
    <p>
        <?php echo "Jum'at"; ?>
    </p>
    <p>
        <?php echo "\"PENGUMUMAN\": Hari Jum'at Libur!"; ?>
    </p>
    <p>
        <?php echo '"PENGUMUMAN": Hari Jum\'at Libur!'; ?>
    </p>
     <p>
        <?php echo '"PENGUMUMAN"' . ": Hari Jum'at Libur!"; ?>
     </p>   

    <hr>
    <?php 
        $nama_depan = "Dena";
        $nama_belakang = "Astia";
        $kelas = "D";

    ?>

    <h2>
        <p> <?php echo "Hello, $nama_depan $nama_belakang!"; ?> </p>
        <p> <?php echo "Kelas $kelas"; ?> </p>
    </h2>
    
    </body>
    </html>