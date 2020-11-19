<?php
$shop_stuff = file_to_array(ROOT . '/app/data/db_shop.json');
?>

<?php foreach ($shop_stuff as $stuff): ?>
    <section class="product_container">
        <h2 class="product_name"><?php print $stuff['tittle']; ?></h2>
        <img class="product_image" src="<?php print $stuff['photo']; ?>" alt="">
        <p class="product_description"><?php print $stuff['description']; ?></p>
        <p class="product_price"><?php print $stuff['price'] . ' Eur'; ?></p>
    </section>
<?php endforeach; ?>