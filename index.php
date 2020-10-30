<?php
$atsakymas = '';

if (isset($_POST['mygtukas'])) {
    if ($_POST['mygtukas'] === 'kelti') {
        $atsakymas = $_POST['number'] * $_POST['number'];
    }

    if ($_POST['mygtukas'] === 'dalinti') {
        $atsakymas = $_POST['number'] / 2;
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions</title>
</head>
<body>

<form method="post">
    <input type="number" placeholder="number" name="number">
    <input type="submit" name="mygtukas" value="kelti">
    <input type="submit" name="mygtukas" value="dalinti">
</form>
<h1><?php print $atsakymas; ?></h1>

</body>
</html>
