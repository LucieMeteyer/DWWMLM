<?php
ob_start()
?>

<div class="row">
    <div class="col-6">
        <img src="<?= URL ?>public/images/<?=$personnage->getImage() ?>">
    </div>
    <div class="col-6">
        <p>Nom : <?= $personnage->getNom() ?></p>
        <p>Nom : <?= $personnage->getPrenom() ?></p>
        <p>Nom : <?= $personnage->getAge() ?></p>
        <p>Nom : <?= $personnage->getSpecialite() ?></p>
    </div>

</div>

<?php
$content = ob_get_clean();
$titre = $personnage->getPrenom();
require "template.php";
?>
