<?php
ob_start()
?>

<div class="row">

    <div class="col-6">
        <img src="<?= URL ?>public/images/<?= $recette->getImage() ?>">
    </div>
    <div class="col-6">
        <p>Nom : <?= $recette->getNom() ?></p>
        <p>Ingredients : <?= $recette->getIngredients() ?></p>
        <p>Etapes : <?= $recette->getEtapes() ?></p>
    </div>

</div>


<?php
$content = ob_get_clean();
$titre = $recette->getNom();
require "template.php";
?>