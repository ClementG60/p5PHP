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
    $months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
    ?>
    <?php for($i = 0; $i <=11; $i++): ?>
        <p>
            <?php
            echo $months[$i];
            ?>
        </p>
    <?php endfor; ?>
</body>

</html>