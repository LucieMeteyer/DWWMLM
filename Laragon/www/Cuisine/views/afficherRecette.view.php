<?php
ob_start()
?>

<div class="container-fluid  d-flex  flex-column p-0 ">
    <img class="img-fluid" style="width:100vw; " src="public/images/cuisine.png" alt="cuisine">
    <h1 class="text-center m-5 p-2 ">La Cuisine de Calcifer</h1>
</div>

<div class=" d-flex flex-column align-items-center m-5">

    <div class=" d-flex row m-3 text-center" style="background-color: #FEE9B1; border-radius: 35px;">
        <p style="font-family :'Eagle Lake', cursive; font-size:20px;"><?= $recette->getNom() ?></p>
    </div>
    <div class="  d-flex row m-3 text-center" style="background-color: #FEE9B1; border-radius: 35px;">
        <img src="<?= URL ?>public/images/<?= $recette->getImage() ?>">
    </div>
    <div class=" col-6 d-flex row m-3 text-center" style="background-color: #FEE9B1; border-radius: 35px;">
        <p style="font-family :'Eagle Lake', cursive;">Ingrédients :</p>
        <?php foreach ($recette->getIngredients() as $ingredients) : ?>

            <p style="font-family :'Eagle Lake', cursive;"> <?= $ingredients ?></p>

        <?php endforeach ?>
    </div>
    <div class="  d-flex flex-column m-3 text-center" style="background-color: #FEE9B1; border-radius: 35px;">
        <p class=" text-center " style="font-family :'Eagle Lake', cursive;">Etapes :</p>
        <?php foreach ($recette->getEtapes() as $etapes) : ?>
            <div style="background-color: #FEE9B1; border-radius: 35px;">
                <p style="font-family :'Eagle Lake', cursive;"><?= $etapes ?></p>
            </div>
        <?php endforeach ?>
    </div>
</div>


<?php
$content = ob_get_clean();
require "template.php";
?>