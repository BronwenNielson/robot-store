<?php

require_once('src/factories/pdo_factories.php');
require_once('src/modals/product_modal.php');
require_once('src/entities/single_product_entity.php');

$db = pdoFactory::connect();
$products = productModal::setIndividualProduct($db);

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
    <title>Product Page</title>
</head>
<body>
<div>
        <?php
        foreach ($products as $product) {
            echo $product->displayProducts();
        }
        ?>
    </div>
</body>
</html>