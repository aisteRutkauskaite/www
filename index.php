<?php

function generate_matrix($size)
{
    $generated_array = [];
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            $generated_array[$i][$j] = rand(0, 1);
        }
    }
    return $generated_array;
}

$matrix = generate_matrix(rand(2, 4));
//var_dump($matrix);

function get_wining_rows($array)
{
    $generated_new_array = [];
    foreach ($array as $index => $numbers) {
        if (count(array_unique($numbers)) === 1) {
            $generated_new_array[] = $index;
        } else {
            print 'Not';
        }
    }
    return $generated_new_array;
}

$wining_rows = get_wining_rows($matrix);
var_dump($wining_rows);

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
    * {
        box-sizing: border-box;
    }

    body {
        display: flex;
        flex-direction: column;
        margin: 0 auto;
    }

    .container {
        display: flex;
    }

    .yellow {
        width: 100px;
        height: 100px;
        background-color: yellow;
        margin: 10px;
    }

    .blue {
        width: 100px;
        height: 100px;
        background-color: cornflowerblue;
        margin: 10px;
    }

    .line {
        border: 1px solid red;
        width: fit-content;
    }

</style>
<body>
<?php foreach ($matrix as $index => $row): ?>
    <div class="container <?php print in_array($index, $wining_rows) ? 'line' : ''; ?>  ">
        <?php foreach ($row as $col): ?>
            <span class="<?php print $col ? 'blue' : 'yellow'; ?>"></span>
        <?php endforeach; ?>
    </div>
<?php endforeach; ?>
</body>
</html>
