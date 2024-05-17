<?php

require_once('src/entities/product_entity.php');
require_once('src/entities/single_product_entity.php');

class productModal
{
    public static function setProducts(PDO $db):array
    {
        $query = $db->prepare('SELECT `title`, `price`, `image`, `id` FROM `products`;');
        $query->setFetchMode(PDO::FETCH_CLASS, ProductEntity::class);
        $query->execute();

        $products = $query->fetchall();

        return $products;
    }

    public static function setIndividualProduct(PDO $db):array
    {
        $id = $_GET["productID"];
        $query = $db->prepare("SELECT `title`, `price`, `image`, `id`, `description` FROM `products` WHERE `id` = $id;");
        $query->setFetchMode(PDO::FETCH_CLASS, SingleProductEntity::class);
        $query->execute();

        $product = $query->fetchall();

        return $product;
    }
}

?>