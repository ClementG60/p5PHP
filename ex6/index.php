<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $departments = [
        02 => 'Aisne',
        59 => 'Pas-de-Calais',
        60 => 'Oise',
        62 => 'Nord',
        80 => 'Somme'
    ];
    ?>
    <p><?php echo $departments[59]; ?></p>
</body>
</html>