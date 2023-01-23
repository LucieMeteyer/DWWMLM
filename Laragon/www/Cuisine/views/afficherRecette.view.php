<?php
ob_start()
?>

<div class="container-fluid  d-flex  flex-column p-0 ">
    <img class="img-fluid" style="width:100vw; " src="public/images/cuisine.png" alt="cuisine">
    <h1 class="text-center m-5 p-2 ">La Cuisine de Calcifer</h1>
</div>

<div class="d-flex flex-column align-items-center m-5">

    <div class="col-6 text-center" style="background-color: #FEE9B1; border-radius: 35px;">
        <p style="font-family :'Eagle Lake', cursive;"><?= $recette->getNom() ?></p>
    </div>
    <div class="col-6 text-center" style="background-color: #FEE9B1; border-radius: 35px;">
        <img src="<?= URL ?>public/images/<?= $recette->getImage() ?>">
    </div>
    <div class="col-6 text-center" style="background-color: #FEE9B1; border-radius: 35px;">
        <p style="font-family :'Eagle Lake', cursive;">Ingrédients :</p>
        <?php foreach ($recette->getIngredients() as $ingredients) : ?>

            <p style="font-family :'Eagle Lake', cursive;"> <?= $ingredients ?></p>

        <?php endforeach ?>
    </div>
    <div class="col-6 text-center" style="background-color: #FEE9B1; border-radius: 35px;">
        <p style="font-family :'Eagle Lake', cursive;">Etapes :</p>
        <?php foreach ($recette->getEtapes() as $etapes) : ?>
            <div class="col-6 text-center" style="background-color: #FEE9B1; border-radius: 35px;">
                <p style="font-family :'Eagle Lake', cursive;"><?= $etapes ?></p>
            </div>
        <?php endforeach ?>
    </div>



    <?php
    $content = ob_get_clean();
    require "template.php";
    ?>