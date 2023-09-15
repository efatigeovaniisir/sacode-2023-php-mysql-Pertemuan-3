<?php
// Kata Selamat Datang 
$welcome = 'Selamat Datang';

// nama saya
$nama = 'Efati';

$keterangan = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. At voluptatum molestiae quod tempore corrupti similique?';

$footer = "Copyright by efati";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?= $welcome.''.$nama ?> </h1>
    <p><?= $keterangan ?> </p>
</body>
</html>