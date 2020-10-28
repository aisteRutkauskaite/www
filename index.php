<?php
$x = rand(0, 100);
$y = rand(0, 100);

function is_prime($number) {
    if ($number === 1) {
        return false;
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
$answer_first = is_prime($x);
$answer_second = is_prime($y);

if ($answer_first) {
    $text1 = "$x yra pirminis skaičius";
} else {
    $text1 = "$x nėra pirminis skaičius";
}
if ($answer_second) {
    $text2 = "$y yra pirminis skaičius";
} else {
    $text2 = "$y nėra pirminis skaičius";
}

function sum_if_prime($x, $y) {
    return $x + $y;
}

if ($answer_first && $answer_second) {
    $suma = sum_if_prime($x, $y);
    $text3 = "Pirminių skaičių suma:$suma ";
} else {
    $text3 = "Abu skaičiai nėra pirminiai";
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
<h1><?php print $text1; ?></h1>
<h1><?php print $text2; ?></h1>
<h1><?php print $text3; ?></h1>
</body>
</html>
