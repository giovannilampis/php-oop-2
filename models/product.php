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
        $this->setName($_name);
        $this->price = $_price;
        $this->description = $_description;
    }

    public function setName($_name)
    {
        if (empty($_name)) {
            throw new Exception("Product NAME has to be declared !");
        }
        $this->name = $_name;
    }
    public function get_product_details()
    {
        return " This product is called: $this->name, it cost € $this->price ";
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