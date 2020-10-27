<?php
$numbers = [
    [0, 0, 1],
    [1, 0, 1],
    [0, 1, 0],
];

$reverse_numbers = [];

foreach ($numbers as $index => $row) {
    foreach ($row as $key => $value) {
        if ($value === 0) {
            $reverse_numbers[$index][$key] = 1;
        } else {
            $reverse_numbers[$index][$key] = 0;
        }
    }
}

var_dump($reverse_numbers);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css?<?php print time(); ?>">
    <title>Functions</title>
</head>
<body>
<!--<h1>--><?php //print ; ?><!--</h1>-->
</body>
</html>