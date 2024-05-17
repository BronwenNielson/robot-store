<?php

class ProductEntity
{
    private int $id;
    private string $title;
    private float $price;
    private string $image;
    
    public function displayProducts () 
    {
        echo '<div class="product-tile">
        <img src="' . $this->image . '">
        <h3>' . $this->title . '</h3>
        <div class="info-box">
        <h2>' . $this->price . '</h2>
        <a class="button" href="product_page.php">See More</a>
        </div>
        </div>';
    }
}

?>
