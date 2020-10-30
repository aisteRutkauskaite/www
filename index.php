<?php


//Deklaruoti masyva pilna raidziu ['b', 'c', 'g'];
//Deklaruoti funkcija count_values($array, $value),
//kuri randa kiek kartu buvo rasta verte masyve ir
//grąžina skaičių.
/**
 * @param array $array Raidžių masyvas.
 * @param string $value Ieškoma raidė.
 * @return int Rastų verčių skaičius.
 */
$letters = ['a', 'b', 'c', 'd', 'e', 'a', 'C', 'D', 'D', 'e'];

function count_values($array, $value) {
    $count = 0;
    foreach ($array as $letter) {
        if ($letter === $value) {
            $count++;
        }
    }
     return $count;
}


var_dump(count_values($letters, 'c'));
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
