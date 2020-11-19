<?php
require '../bootloader.php';

//Check if user is logged in and show it on the screen

if (is_logged_in()) {
    $message = 'Welcome to WTF shop ' . $_SESSION['email'];
} else {
    header("location: /login.php");
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
    <link rel="stylesheet" href="style.css">
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
    <h1 class="index_tittle"><?php print $message; ?></h1>
    <article class="products_container">
        <?php require ROOT . '/core/templates/shop_stuff.tpl.php'; ?>
    </article>
</main>
</body>
</html>



