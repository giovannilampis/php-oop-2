<?php

class Product
{
    public $image;
    public $name;
    public $price;
    public $description;
    public $animal;
    public function __construct($_image, $_name, $_price, $_description, $_animal)
    {

        $this->image = $_image;
        $this->name = $_name;
        $this->price = $_price;
        $this->description = $_description;
        $this->animal = $_animal;
    }

    public function get_product_details()
    {
        return " This product is called: $this->name, it cost € $this->price ";
    }

}

?>