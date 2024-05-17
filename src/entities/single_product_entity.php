<?php

class SingleProductEntity
{
    private int $id;
    private string $title;
    private float $price;
    private string $image;
    private string $description;
    
    function displayProducts () {
        echo "<div class='button-container'>
                <a class='button' href='index.php'>Return to All Products</a>
            </div>
            <div class='product-page'>
                <img src='{$this->image}'>
                <div class='product-info'>
                    <h1>{$this->title}</h1>
                    <h2> \${$this->price} </h2>
                    <p>{$this->description}<p>
                </div>
            </div>";
    }
}

?>