<?php

throw new Exception('Invalid price for product: $this->name');

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
        // $this->price = $_price;
        $this->setPrice($_price);
        $this->description = $_description;
    }
    public function get_product_details()
    {
        return " This product is called: $this->name, it cost € $this->price ";
    }

    public function setPrice($_price)
    {
        if ($_price <= 0) {
            throw new Exception('Invalid price for product: $this->name');
        }
        return $_price;

    }
}
class ProductAnimal extends Product
{
    public $animal; // Cane / gatto 

    public function __construct($_animal, $_image, $_name, $_price, $_description)
    {
        parent::__construct($_image, $_name, $_price, $_description);
        $this->animal = $_animal;
    }
}

class KindOfProduct extends ProductAnimal
{
    public $category; // Cuccia 

    public function __construct(string $_category, $_animal, $_image, $_name, $_price, $_description)
    {
        parent::__construct($_animal, $_image, $_name, $_price, $_description);
        $this->category = $_category;
    }

}
?>