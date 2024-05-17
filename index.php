<?php

require_once('src/factories/PdoFactory.php');
require_once('src/modals/ProductModal.php');
require_once('src/entities/ProductEntity.php');

$db = PdoFactory::connect();
$products = ProductModal::getProducts($db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product-page-styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Robot Store</title>
</head>
<body>
    <div class='selection-box'>
        <h1>Categories</h1>
        <div>
        <input type="checkbox" id="apron" name="arpon" value="Apron">
        <label for="apron">Aprons</label>
        </div>
        <div>
        <input type="checkbox" id="hats" name="hats" value="Hat">
        <label for="hats">Hats</label>
        </div>
        <div>
        <input type="checkbox" id="mugs" name="mugs" value="Mug">
        <label for="mugs">Mugs</label>
        </div>
        <div>
        <input type="checkbox" id="shirts" name="shirts" value="shirts">
        <label for="shirts">T-shirts</label>
        </div>

        <h1>Characters</h1>
        <div>
        <input type="checkbox" id="bubbles" name="bubbles" value="Bubbles">
        <label for="bubbles">Bubbles</label>
        </div>
        <div>
        <input type="checkbox" id="dolores" name="dolores" value="dolores">
        <label for="dolores">Dolores</label>
        </div>
        <div>
        <input type="checkbox" id="fred" name="fred" value="Fred">
        <label for="fred">Fred</label>
        </div>
        <div>
        <input type="checkbox" id="rex" name="rex" value="Rex">
        <label for="rex">Rex</label>
        </div>
    </div>
    <div class='product-container'>
        <?php
        foreach ($products as $product) {
            echo $product->displayProducts();
        }
        ?>
    </div>
</body>
</html>