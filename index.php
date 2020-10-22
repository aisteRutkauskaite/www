<?php
$my_memories = [
    'Baras',
    'Draugai',
    'Kokteiliai',
    'Šokiai',
    'Maistas',
    'Alus',
    'Linskmybes'
];

$flashback_index = rand(0 , count($my_memories) - 1);
$fb_text = $my_memories[$flashback_index];
$h3 = "Flashback $fb_text : $flashback_index"
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
<h3><?php print $h3; ?> </h3>
</body>
</html>