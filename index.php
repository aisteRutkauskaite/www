<?php
$street = [];

for ($x = 0; $x < 5; $x++) {
    $street[] = 'gražus namas su elektra';
}
var_dump($street);

foreach ($street as $key => $house) {
    $street[$key] = &$house;
}

$street[2] = 'dingo elektra';
var_dump($street);

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
