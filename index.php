<?php
$cars = [
    [
        'image' => 'https://mk0thecarexpert5k1d5.kinstacdn.com/wp-content/uploads/2020/01/P90331851_highRes_the-bmw-x5-m50d.jpg',
        'brand' => 'BMW',
        'model' => 'x5',
        'year' => 2015,
        'price' => 32000,
        'on_sale' => rand(0, 1),
    ],
    [
        'image' => 'https://mk0thecarexpert5k1d5.kinstacdn.com/wp-content/uploads/2020/01/P90331851_highRes_the-bmw-x5-m50d.jpg',
        'brand' => 'BMW',
        'model' => 'i3',
        'year' => 2017,
        'price' => 33000,
        'on_sale' => rand(0, 1),
    ],
    [
        'image' => 'https://mk0thecarexpert5k1d5.kinstacdn.com/wp-content/uploads/2020/01/P90331851_highRes_the-bmw-x5-m50d.jpg',
        'brand' => 'BMW',
        'model' => '520',
        'year' => 2014,
        'price' => 334000,
        'on_sale' => rand(0, 1),
    ],

    [
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQtSUhwy4rM4sQWE_DW9HM2TnpYoP0N0ZnY9Q&usqp=CAU',
        'brand' => 'Audi',
        'model' => 'a1',
        'year' => 2017,
        'price' => 36000,
        'on_sale' => rand(0, 1),
    ],
    [
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQtSUhwy4rM4sQWE_DW9HM2TnpYoP0N0ZnY9Q&usqp=CAU',
        'brand' => 'Audi',
        'model' => 'a2',
        'year' => 2014,
        'price' => 360005,
        'on_sale' => rand(0, 1),
    ],
    [
        'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQtSUhwy4rM4sQWE_DW9HM2TnpYoP0N0ZnY9Q&usqp=CAU',
        'brand' => 'Audi',
        'model' => 'a3',
        'year' => 2017,
        'price' => 360075,
        'on_sale' => rand(0, 1),
    ],
    [
        'image' => 'https://autoplius-img.dgn.lt/nak_12_40285/porsche-911-carrera.jpg',
        'brand' => 'Porshe',
        'model' => '911',
        'year' => 2016,
        'price' => 360705,
        'on_sale' => rand(0, 1)
    ],
];

shuffle($cars);

//$cars_by_brand = [];
//$cars_brand = 'BMW';
//
//foreach ($cars as $car_brands) {
//    if ($car_brands['brand'] == $cars_brand) {
//        $cars_by_brand[] = $car_brands;
//    }
//}

//$cars_with_bigger_price = [];
//$minimal_price = 70000;
//
//foreach ($cars as $car_price) {
//    if ($car_price['price'] > $minimal_price) {
//        $cars_with_bigger_price[] = $car_price;
//    }
//}

$cars_with_lowest_price = [];
$minimal_price = 70000;

foreach ($cars as $car_price) {
    if ($car_price['price'] < $minimal_price) {
        $cars_with_lowest_price[] = $car_price;
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bloopers</title>
</head>
<style>
    main {
        display: flex;
        flex-wrap: wrap;
        width: 80%;
        margin: 0 auto;
    }

    .card {
        text-align: center;
        border: 1px solid black;
        width: 320px;
        margin: 10px;
    }

    .img {
        width: 300px;
        height: 200px;
        margin: 5px;
    }

    .red {
        background-color: red;
    }

    .green {
        background-color: green;
    }
</style>
<body>
<header></header>
<main>
    <?php foreach ($cars_with_lowest_price as $value): ?>
        <div class="card">
            <img class="img" src="<?php print $value['image']; ?>" alt="photo">
            <div>
                <h2><?php print $value['brand'] . ' ' . $value['model']; ?></h2>
                <h3><?php print 'Year ' . $value['year']; ?></h3>
                <?php if ($value['on_sale']) : ?>
                    <div class="green">
                        <h3><?php print $value['price'] . " eur"; ?></h3>
                    </div>
                <?php else : ?>
                    <div class="red">
                        <h3><?php print 'Sold out'; ?></h3>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</main>
<footer></footer>
</body>
</html>