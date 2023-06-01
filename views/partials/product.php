<?php

include __DIR__ . '/../../models/product.php';

$product_0000 = new Product('https://unsplash.com/it/foto/w6elADh_jww', 'croquettes', '10', 'Best quality croquettes for the pet you love');

$product_0001 = new Product('https://unsplash.com/it/foto/ZJsM3GRdAnY', 'pate', '18', 'Best quality pate for the pet you need to pamper');

$product_0002 = new Product('https://unsplash.com/it/foto/A7nK49HCqSI', 'pet bed', '70', 'Make sure your pet to have the best sleep time');

$product_0003 = new Product('https://unsplash.com/it/foto/q9iyCG7FRmQadd $movieA & $movieB, instances of class Movie', 'game', '8', 'Let your pet to have the best games to play with');

?>

<main>

    <div class="card" style="width: 18rem;">
        <img src="<?php echo $product_0000->image ?>" class="card-img-top" alt="<?php echo $product_0000->name ?>">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $product_0000->name ?>
            </h5>
            <p class="card-text">
                <?php echo $product_0000->description ?>
            </p>
            <h5 class="card-title">
                <?php echo $product_0000->price ?>
            </h5>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

</main>