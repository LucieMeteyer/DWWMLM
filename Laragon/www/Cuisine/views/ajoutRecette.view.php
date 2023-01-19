<?php ob_start() ?>

<form method="POST" action="<?= URL ?>recettes/av" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="nom" class="form-label"> Nom :</label>
        <input type="text" class="form-control" id="nom" name="nom">
    </div>

    <div class="mb-3">
        <label for="image" class="form-label"> Image :</label>
        <input class="form-control" type="file" id="image" name="image">
    </div>


    <div class="mb-3">
        <label for="ingredients" class="form-label"> Ingrédients : </label>
        <input type="number" class="form-control" id="ingredients" name="ingredients">
    </div>



    <button type="submit" class="btn btn-primary"> Valider </button>
</form>

<?php
$content = ob_get_clean();
$titre = "Ajout d'une recette";
require "template.php";
?>