<?php
$my_memories = [
    'Baras',
    'Draugai',
    'Kokteiliai',
    'Šokiai',
    'Šokiai',
    'Alus',
    'Linskmybes'
];

var_dump($my_memories);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> kazkas </title>
</head>
<body>
<h1>Kas buvo penktadienį?</h1>
<h2>Mano prisiminimai:</h2>
<ul>
    <?php foreach ($my_memories as $memory) : ?>
        <li><?php print $memory; ?> </li>
    <?php endforeach; ?>
</ul>
</body>
</html>