<?php

class Product
{
    private $image;
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

    public function getImage()
    {
        return $this->image;
    }
    public function setImage(string $_image)
    {
        $this->image = $_image;
    }
    public function get_product_details()
    {
        return " This product is called: $this->name, it cost € $this->price ";
    }

}

$test = new Product();

$test->name = "ss";

$test->setImage("ss"); // modificare il contenuto
$test->getImage(); // ottenere il dato

class Animal extends Product
{
    public $animal; // Cane / gatto 

    public function __construct($_animal, $_image, $_name, $_price, $_description)
    {
        parent::__construct($_image, $_name, $_price, $_description);
        $this->animal = $_animal;
    }
}

class kindOfProduct extends Animal
{
    public $category; // Cuccia 

    public function __construct(string $_category, $_animal, $_image, $_name, $_price, $_description)
    {
        parent::__construct($_animal, $_image, $_name, $_price, $_description);
        $this->category = $_category;
    }
}

$cuccia = new kindOfProduct("Cuccia", "Dog", "http:", )


    ?>