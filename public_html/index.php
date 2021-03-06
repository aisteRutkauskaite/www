<?php
require '../bootloader.php';

$fileDB = new FileDB(DB_FILE);
$fileDB->load();
$pixels = $fileDB->getRowsWhere('coordinates');

$nav = nav();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="media/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Forms</title>
</head>
<body>
<header>
    <?php require ROOT . '/core/templates/navigation.tpl.php'; ?>
</header>
<main>
    <p class="index_tittle">POOP-WALL</p>
    <div class="poop_wall">
        <?php foreach ($pixels as $pixel): ?>
            <span class="poop <?php print $pixel['color']; ?>"
                  style="left:<?php print $pixel['coordinateX']; ?>px; top:<?php print $pixel['coordinateY']; ?>px"></span>
        <?php endforeach; ?>
    </div>
</main>
</body>
</html>



