<?php

include __DIR__ . '/../../models/product.php';

$arrayProducts = [
    new Product('https://images.unsplash.com/photo-1568640347023-a616a30bc3bd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1473&q=80', 'croquettes', '10', 'Best quality croquettes for the pet you love'),
    new Product('https://images.unsplash.com/photo-1653515906875-d76b304ea402?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80', 'pate', '18', 'Best quality pate for the pet you need to pamper'),
    new Product('https://images.unsplash.com/photo-1541188495357-ad2dc89487f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80', 'pet bed', '70', 'Make sure your pet to have the best sleep time'),
    new Product('https://images.unsplash.com/photo-1589924749359-9697080c3577?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80', 'game', '8', 'Let your pet to have the best games to play with')
];

$clicked_product_number = 1;

?>

<main class="container">

    <div class="row">

        <?php for ($i = 0; $i < count($arrayProducts); $i++) { ?>
            <div class="col-6">
                <div class="card">
                    <img src="<?php echo $arrayProducts[$i]->image ?>" class="card-img-top"
                        alt="<?php echo $arrayProducts[$i]->name ?>">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $arrayProducts[$i]->name ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $arrayProducts[$i]->description ?>
                        </p>
                        <h5 class="card-title">
                            <?php echo $arrayProducts[$i]->price ?>
                        </h5>
                        <a onclick=" <?php $clicked_product_number = $i ?> " href="" class="btn btn-primary"
                            data-bs-toggle="modal" data-bs-target="<?php echo "#product" . $i ?>">
                            <?php echo $arrayProducts[$i]->name ?>
                        </a>
                        <span>
                            INDEX:
                            <?php echo $i ?>
                        </span>
                    </div>
                </div>

            </div>

            <!-- Modal -->
            <div class="modal fade" id="<?php echo "product" . $i ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                <?php echo $arrayProducts[$i]->name ?>
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>



</main>