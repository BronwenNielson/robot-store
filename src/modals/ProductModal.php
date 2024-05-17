<?php

require_once('src/entities/ProductEntity.php');
require_once('src/entities/SingleProductEntity.php');

class ProductModal
{
    public static function getProducts(PDO $db) : array
    {
        $query = $db->prepare('SELECT `title`, `price`, `image`, `id` FROM `products`;');
        $query->setFetchMode(PDO::FETCH_CLASS, ProductEntity::class);
        $query->execute();

        return $query->fetchall();
    }

    public static function getIndividualProduct(PDO $db)
    {
        $query = $db->prepare("SELECT `title`, `price`, `image`, `id`, `description` FROM `products` WHERE `id` = 1;");
        $query->setFetchMode(PDO::FETCH_CLASS, SingleProductEntity::class);
        $query->execute();

        return $query->fetch();
    }
}

?>