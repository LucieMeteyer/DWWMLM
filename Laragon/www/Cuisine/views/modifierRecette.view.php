<?php ob_start() ?>

<form method="POST" action="<?= URL ?>recettes/m" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="nom" class="form-label"> Nom :</label>
        <input type="text" class="form-control" id="nom" name="nom" value="<?= $recette->getNom(); ?>">
    </div>

    <div class="mb-3">
        <label for="ingredients" class="form-label"> Ingrédients :</label>
        <input type="number" class="form-control" id="ingredients" name="ingredients" value="<?= $recette->getIngredients(); ?>">
    </div>
    <h3> Images : </h3>
    <img src="<?= URL ?>public/images/<?= $recette->getImage() ?>" alt="">
    <div class="mb-3">
        <label for="image" class="form-label"> Image :</label>
        <input class="form-control" type="file" id="image" name="image">
    </div>

    <input type="hidden" name="identifiant" value="<?= $recette->getId(); ?>">
    <button type="submit" class="btn btn-success"> Valider </button>
</form>

<?php
$content = ob_get_clean();
$titre = "Modification de la recette : " . $recette->getId();
require "template.php";
