<?php
$hurdle_jump = [rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10),];
$jump_height = rand(5, 12);


function check_height($array, $number) {
    foreach ($array as $jump) {
        var_dump($number);
        var_dump($array);
        if ($jump  < $number) {
            return true;
        } else {
            return false;
        }
    }
}

var_dump(check_height($hurdle_jump, $jump_height));
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
