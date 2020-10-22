<?php

$users = [
    [
        'user_name' => 'Luk Skywalker',
        'user_email' => 'LukSkywalker@gmail.com',
        'user_image' => 'https://static.wikia.nocookie.net/battlefront/images/4/4a/Battlefront_Luke.jpg/revision/latest/top-crop/width/360/height/360?cb=20151022170630',
    ],
    [
        'user_name' => 'Darth Vader',
        'user_email' => 'DarthVader@gmail.com',
        'user_image' => 'https://i.pinimg.com/originals/c1/27/f3/c127f31130e49eb606ebf9a9be204c4c.jpg',
    ],
    [
        'user_name' => 'Chewbacca',
        'user_email' => 'Chewbacca@gmail.com',
        'user_image' => 'https://www.lrt.lt/img/2019/05/03/420817-663811-1287x836.jpg',
    ],
    [
        'user_name' => 'Han Solo',
        'user_email' => 'Solo@gmail.com',
        'user_image' => 'https://s29588.pcdn.co/wp-content/uploads/sites/2/2018/04/Star-Wars-Han-Solo-Leather-Vest-Jacket1.png',
    ],
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cards</title>
</head>
<style>
    body {
        display: flex;
    }

    img {
        height: 200px;
        width: 100%;
    }

    div {
        border: 1px solid grey;
        text-align: center;
        width: 200px;
    }
</style>
<body>
<?php foreach ($users as $value): ?>
    <div>
        <img src="<?php print $value['user_image']; ?>" alt="photo">
        <div>
            <h2><?php print $value['user_name']; ?></h2>
            <p><?php print $value['user_email']; ?></p>
        </div>
    </div>
<?php endforeach; ?>
</body>
</html>