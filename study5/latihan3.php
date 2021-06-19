<?php

$mahasiswa = [["Slackie", "062406104", "computer science", "email"],
                ["Mayuki", "062406104", "computer science", "email"]
                ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>
</head>
<body>
    <h1>Students List</h1>
    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <?php foreach ($mhs as $mh) :?>
            <li><?= $mh; ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endforeach; ?>
</body>
</html>