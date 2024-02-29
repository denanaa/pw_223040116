<?php 

$film = [ 
    [
        'poster' => 'enolaholmes.jpg',
        'judul' => 'Enola Holmes',
        'tahun' => '2020',
        'genre' => ['Misteri, ', 'Petualangan, ', 'Kejahatan.'],
        'pemeran utama' => 'Millie Bobby Brown as Enola Holmes',
        'sutradara' => 'Harry Bradbeer'
    ],
    [
        'poster' => 'highandlow.png',
        'judul' => 'High & Low: The Worst',
        'tahun' => '2019',
        'genre' => ['Laga, ', 'Drama.'],
        'pemeran utama' => 'Kazuma Kawamura as Fujio Hanaoka',
        'sutradara' => 'Sigeaki Kubo'
    ],
    [
        'poster' => 'harrypotter.png',
        'judul' => 'Harry Potter and the Chamber of Secrets',
        'tahun' => '2002',
        'genre' => ['Film Fantasi, ', 'Petualangan, ', 'Film Anak-anak, ', 'Misteri.'],
        'pemeran utama' => 'Daniel Radclieffe as Harry Potter',
        'sutradara' => 'Chris Columbus'
    ],
    [
        'poster' => 'descendants.png',
        'judul' => 'Descendants',
        'tahun' => '2015',
        'genre' => ['Musikal, ', 'Laga, ', 'Film Komedi, ', 'Televisi, ', 'Petualangan, ', 'Film Fantasi, ' , 'Remaja.'],
        'pemeran utama' => 'Dove Cameron as Mal',
        'sutradara' => 'Kenny Ortega'
    ],
    [
        'poster' => 'mencuriradensaleh.png',
        'judul' => 'Mencuri Raden Saleh',
        'tahun' => '2022',
        'genre' => ['Laga, ', 'Film Komedi, ', 'Cerita Seru, ', 'Perampokan, ', 'Petualangan, ', 'Drama, ', 'Kejahatan.'],
        'pemeran utama' => 'Iqbaal Ramadhan as Piko',
        'sutradara' => 'Angga Dwimas Sasongko'
    ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Film</title>
</head>
<body>
<h2>Daftar Film</h2>
    <ol>
    <?php foreach($film as $i => $f) { ?>
        <li><strong><?= $f['judul']; ?></strong>
        <ul>
        <li>
            <img src="image/<?= $f['poster']; ?>" width = 200px >
        </li>
        <li>Judul : <?= $f['judul']; ?></li>
        <li>Tahun : <?= $f['tahun']; ?></li>
        <li>Pemeran Utama : <?= $f['pemeran utama']; ?></li>
        <li>Sutradara : <?= $f['sutradara']; ?></li>
        <li>Genre : 
            <?php foreach($f['genre'] as $f) {
                echo $f;
            } ?>
        </li>
        </ul>
        <br>
        </li>
    <?php } ?>
    </ol>
</body>
</html>