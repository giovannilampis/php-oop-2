<?php

include_once __DIR__ . '/../models/product.php';

try {

    $arrayProducts = [
        new KindOfProduct('Food', 'dog', 'https://images.unsplash.com/photo-1568640347023-a616a30bc3bd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1473&q=80', 'Croquettes', '0', 'Best quality croquettes for the pet you love'),
        new KindOfProduct('Food', 'cat', 'https://images.unsplash.com/photo-1653515906875-d76b304ea402?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80', 'Yummy Pate', '18', 'Best quality pate for the pet you need to pamper'),
        new KindOfProduct('Pet Bed', 'cat', 'https://images.unsplash.com/photo-1541188495357-ad2dc89487f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80', 'Soft Alcove', '70', 'Make sure your pet to have the best sleep time'),
        new KindOfProduct('Toy', 'dog', 'https://images.unsplash.com/photo-1589924749359-9697080c3577?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80', 'Mattel Dog Series', '8', 'Let your pet to have the best games to play with')
    ];
    $arrayProducts[] = new KindOfProduct('Toy', 'dog', 'https://images.unsplash.com/photo-1589924749359-9697080c3577?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80', '', '8', 'Let your pet to have the best games to play with')
    ;



    //$arrayProducts[0]->setName("");
} catch (Exception $e) {
    var_dump($e->getMessage());
}

?>