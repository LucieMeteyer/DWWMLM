<?php
ob_start()
?>

<div class="container-fluid  d-flex  flex-column p-0 ">
    <img class="img-fluid" style="width:100vw; " src="public/images/cuisine.png" alt="cuisine">
    <h1 class="text-center m-5 p-2 ">La Cuisine de Calcifer</h1>
</div>


<div style=" background-color : #FEE9B1; border-radius: 35px ;" class="container fs-5 p-3 ">
    <center>
        <p style="font-family : 'Eagle Lake', cursive;">
            Voici la cuisine ! <br>
            Vous retrouverez toutes les recettes ici
        </p>
    </center>

</div>

<div class="justify-content-center d-flex">
    <div class="d-flex row justify-content-center m-4 gap-3 col-4">
        <?php

        for ($i = 0; $i < count($recettes); $i++) : ?>

            <div class="card text-center " style=" width: 18rem; background-color: #FEE9B1; border-radius: 35px; ">
                <img src="public/images/<?= $recettes[$i]->getImage(); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> <?= $recettes[$i]->getNom(); ?></h5>
                    <a href="<?= URL ?>recettes/r/<?= $recettes[$i]->getId(); ?>" style=" background-color:#B79994; color : #2F2523 ; font-family: 'Eagle Lake', cursive;" class="btn m-2 ">Voir la recette</a>
                    <a href="<?= URL ?>recettes/m/<?= $recettes[$i]->getId(); ?>" style=" background-color:#B1C587; color : #2F2523 ; font-family: 'Eagle Lake', cursive;" class="btn ">Modifier</a>
                    <a href="<?= URL ?>recettes/s/<?= $recettes[$i]->getId(); ?>" style=" background-color:#FF3B00; color : #2F2523 ;font-family: 'Eagle Lake', cursive;" class="btn m-2">Supprimer</a>

                </div>
            </div>

        <?php endfor; ?>
    </div>
</div>
<div class="text-center p-1px ">
    <a href="<?= URL ?>recettes/a" style="background-color:#B79994; color : #2F2523 ;font-family: 'Eagle Lake', cursive;" class="btn d-block">Ajouter une recette</a>

</div>

<?php
$content = ob_get_clean();
require "template.php";
