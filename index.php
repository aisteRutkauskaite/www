<?php
//Deklaruoti masyva pilna raidziu ['b', 'c', 'g'];
//Deklaruoti funkcija change_values, kuri gebėtų
//pakeist turimo masyvo rastą(-as) vertę(-es) į nurodytą
/**
 * @param array $array Raidžių masyvas.
 * @param string $from Sena vertė.
 * @param string $to Nauja vertė.
 */
$letters = ['a', 'b', 'c', 'd', 'e', 'a', 'C', 'D', 'D', 'e'];

function change_values(&$array, $from, $to) {
    foreach ($array as $key =>  &$letter) {
        if ($letter === $from) {
            $letter = $to;
        }
    }
}

change_values($letters, 'a', 'j');
var_dump($letters);
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

</body>
</html>
