<?php

    // Judul halaman web
    $title = 'Comment';

    # Header dari halaman web
    $header = 'Belajar Membuat Comment';

    /*
    Menyipan Gambar
    Dalam Variabel
    */
    $gambar = 'https://images.unsplash.com/photo-1615608178738-37d47d27c13d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80';

    $video = '<iframe width="499" height="480" src="https://www.youtube.com/embed/IRUBx7rdL7I?list=RDIRUBx7rdL7I" title="Sereka Mai - Ratu feat Wilz &amp; Vanboii" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title ?></title>

    <style>
        img {
            width: 499px;
            height: 480px;
        }
    </style>
</head>
<body>

    <h2><?= $header ?></h2>

    <img src="<?= $gambar ?>">

    <?= $video /* video bersumber dari youtube */ ?>
    
</body>
</html>
