<?php
$date = date('Y');
$last_name = '';
$years = '';
$level = '';
$name = '';
$birth_years = '';

    if (isset($_POST['vardas'])) {
        $name = $_POST['vardas'];
    }
    if (isset($_POST['pavarde'])) {
        $last_name = $_POST["pavarde"];
    }
    if (isset($_POST['metai'])) {
        $years = $_POST["metai"];
        $birth_years = $date - (int)$years;
    }
    if (isset($_POST['lygis'])) {
        $level = $_POST["lygis"];
    }
    $atsakymas = $name . ', gimęs (usi) ' . $birth_years . 'metais yra ' . $level . ' PHP programuotojas';

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
<style>
    img {
        width: 100px;
        height: 100px;
    }
</style>
<body>
<main>
    <?php if (isset($_POST['pateikti'])): ?>
        <div class='block'>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/P_yes_green.svg/1200px-P_yes_green.svg.png">
            <div class="tekstas">
                <h1>PHP ANKETA</h1>
                <p>Vardas: <?php print $name; ?></p>
                <p>Pavarde: <?php print $last_name; ?></p>
                <p>Amzius: <?php print $years; ?></p>
                <p>Lygis: <?php print $level; ?></p>
                <p><?php print $atsakymas; ?></p>
            </div>
        </div>
    <?php else: ?>
        <form action="" method="post">
            <input type="text" placeholder="vardas" name="vardas">
            <input type="text" placeholder="pavarde" name="pavarde">
            <input type="number" placeholder="amžius" name="metai">
            <label for="lygis">Kaip vertini savo PHP žinias?</label>
            <select name="lygis" id="lygis">
                <option value="nekažką">Nekažką</option>
                <option value="pradedantysis">Pradedantysis</option>
                <option value="pažengęs">Pažengęs</option>
                <option value="gerai varau">Gerai varau</option>
            </select>
            <input type="submit" name="pateikti">
        </form>
    <?php endif; ?>
</main>
</body>
</html>
