<?php

class Product
{
    public $image;
    public $name;
    public $price;
    public $description;

    public function __construct($_image, $_name, $_price, $_description)
    {

        $this->image = $_image;
        $this->name = $_name;
        $this->price = $_price;
        $this->description = $_description;
    }

}

?>