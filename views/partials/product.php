<?php

include __DIR__ . '/../../database/db.php';

$clicked_product_number = 1;

?>

<main class="container">

    <div class="row">

        <?php for ($i = 0; $i < count($arrayProducts); $i++) { ?>
            <div class="col-6">
                <div class="card mb-4">
                    <img src="<?php echo $arrayProducts[$i]->image ?>" class="card-img-top"
                        alt="<?php echo $arrayProducts[$i]->name ?>">
                    <div class="card-body position-relative">
                        <h2 class="card-title">
                            <?php echo $arrayProducts[$i]->name ?>
                        </h2>
                        <p class="card-text">
                            <?php echo $arrayProducts[$i]->description ?>
                        </p>
                        <h3 class="card-title">
                            €
                            <?php echo $arrayProducts[$i]->price ?>
                        </h3>
                        <a onclick=" <?php $clicked_product_number = $i ?> " href="" class="btn" data-bs-toggle="modal"
                            data-bs-target="<?php echo "#product" . $i ?>">
                            <?php echo $arrayProducts[$i]->name ?>
                        </a>
                        <div class="animal_icon text-center">
                            <?php if ($arrayProducts[$i]->animal == 'cat') { ?>
                                <i class="fa-solid fa-cat"></i>
                            <?php } else { ?>
                                <i class="fa-solid fa-dog"></i>
                            <?php } ?>
                        </div>
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