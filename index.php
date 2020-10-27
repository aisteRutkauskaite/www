<?php

$products = [
    [
        'name' => 'Stumbro degtinėle',
        'price' => 6.49,
        'image' => 'https://www.vynomeka.lt/images/uploader/de/degtine-stumbras-premium-organic-07-l-1.jpg',
    ],
    [
        'name' => 'Balzamas',
        'price' => 9.50,
        'price_special' => 7.99,
        'image' => 'https://lh3.googleusercontent.com/proxy/nDtORwHTMhybMTdBzRjPPdy7iZ7CcmVduGdL4J8z-OJ5izi3msTa0qoDkEkl1o5C6Kyh6etpakF9OW_0kH165KVMI2RwGdZL0Va452D-BiDtyjVhWAGgQMjriUrpgHp-WI6knrzrh2qLoORmIkT1',
    ],
    [
        'name' => 'Vyšnių Kriek',
        'price' => 1.45,
        'image' => 'https://rimibaltic-res.cloudinary.com/image/upload/b_white,c_fit,f_auto,h_480,q_auto,w_480/d_ecommerce:backend-fallback.png/MAT_1358139_PCE_LT',
        'in_stock' => rand(0, 1),
    ],
    [
        'name' => 'Sidras Somersby',
        'price' => 1.69,
        'price_special' => 1.09,
        'image' => 'https://rimibaltic-res.cloudinary.com/image/upload/b_white,c_fit,f_auto,h_480,q_auto,w_480/d_ecommerce:backend-fallback.png/MAT_1359563_PCE_LT',
    ],
];

$discount = 0;

foreach ($products as $key => $product) {
    $products[$key]['in_stock'] = rand(0, 1);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css?<?php print time(); ?>">
    <title>Bloopers</title>
</head>
<style>
    body {
        text-align: center;
        display: flex;
        flex-direction: column;
        margin: 0 auto;
    }

    .img {
        height: 300px;
    }

    .container {
        display: flex;
        justify-content: center;
    }

    .card {
        border: 1px solid black;
        margin: 10px;
        width: 400px;
    }

    .special_price {
        display: flex;
        justify-content: flex-start;
        background-color: red;
        padding-left: 45px;
        color: white;
        width: 100px;
    }

    .normal-price {
        background-color: black;
        color: white;
        display: flex;
        justify-content: flex-start;
        padding-left: 45px;
        width: 100px;
    }

    .special_price_container {
        display: flex;
        justify-content: space-between;
    }

    .green {
        color: green;
    }

    .red {
        color: red;
    }

    .grey {
        filter: grayscale(100%);
        height: 300px;
    }
</style>
<body>
<h1>DRINKS CATALOGUE:</h1>
<?php foreach ($products

as $value): ?>
<section class="container">
    <article class="card">
        <?php if (array_key_exists('price_special', $value)): ?>
            <section class="special_price_container">
                <div class="special_price">
                    <h3><?php print $value['price_special'] . 'Eur'; ?></h3>
                </div>
                <div class="special_price">
                    <h3><?php print '-' . $discount = round(100 - $value['price_special'] * 100 / $value['price']) . '%'; ?></h3>
                </div>
            </section>
        <?php else: ?>
            <div class="normal-price">
                <h3><?php print $value['price'] . 'Eur'; ?></h3>
            </div>
        <?php endif; ?>
        <section>
            <img class="  <?php print ($value['in_stock']) ? 'img': 'grey'; ?>" src="<?php print $value['image']; ?>" alt="photo">
            <h2><?php print $value['name']; ?></h2>
            <?php if ($value['in_stock']): ?>
                <h4 class="green"><?php print 'Yra Sandelyje'; ?></h4>
            <?php else: ?>
                <h4 class="red"><?php print 'Nėra sandelyje'; ?></h4>
            <?php endif; ?>
        </section>
    </article>
    <?php endforeach; ?>
</section>
</body>
</html>