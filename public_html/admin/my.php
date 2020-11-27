<?php
require '../../bootloader.php';

if (is_logged_in()) {
    $message = 'Welcome to POOP-WALL '. ' ' . $_SESSION['email'];
}

$fileDB = new FileDB(DB_FILE);
$fileDB->load();
$pixels = $fileDB->getRowsWhere('coordinates');
$pixels = file_to_array(DB_FILE);
$my_pixels = [];

foreach ($pixels['coordinates'] ?? [] as $coordinates) {
    if ($coordinates['email'] === $_SESSION['email']) {
        $my_pixels[] = $coordinates;
    }
}

$nav = nav();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../media/style.css">
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
    <?php if (is_logged_in()): ?>
        <h1 class="index_tittle"><?php print $message; ?></h1>
    <?php endif; ?>
    <div class="poop_wall">
        <?php foreach ($my_pixels as $pixel): ?>
            <span class="poop <?php print $pixel['color']; ?>" style="left:<?php print $pixel['coordinateX']; ?>px; top:<?php print $pixel['coordinateY']; ?>px"></span>
        <?php endforeach; ?>
    </div>
</main>
</body>
</html>
