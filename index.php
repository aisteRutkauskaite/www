<?php

$two_digit_number = rand(11, 99);


function largest_swap($n) {
    $num = (string)$n;
    $reversed_number = strrev($num);
    $number = (string)$reversed_number;
    var_dump($n);
    var_dump($reversed_number);

    if ($number > $n) {
        return true;
    } else {
        return false;
    }
}

var_dump(largest_swap($two_digit_number));
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

</style>
<body>
<section class="container">

</section>
</body>
</html>
