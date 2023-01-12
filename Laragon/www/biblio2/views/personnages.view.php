<?php

require_once "PersonnagesManager.class.php";

$personnagesManager = new PersonnagesManager;
$personnagesManager->chargementPersonnages();

ob_start()
?>
<div class="d-flex wrap m-4 gap-3">
    <?php
    $personnages = $personnagesManager->getPersonnages();

    for ($i = 0; $i < count($personnages); $i++) : ?>

        <div class="card bg-light" style="width: 18rem;">
            <img src="public/images/<?= $personnages[$i]->getImage(); ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> <?= $personnages[$i]->getPrenom(); ?> <?= $personnages[$i]->getNom(); ?></h5>
                <p class="card-text"><?= $personnages[$i]->getSpecialite(); ?></p>
                <a href="<?= URL ?>personnages/l/<?= $personnages[$i]->getId();?>" class="btn btn-primary">Plus d'infos</a>
            </div>
        </div>

    <?php endfor; ?>
</div>
<div class="text-center p-1px">
<a href="" class="btn btn-outline-success" style="background-color: #41D7A7;"> Ajouter </a>
<a href="" class="btn btn-outline-info " style="background-color: #93b8de;"> Modifier </a>
<a href="" class="btn btn-outline-danger "> Supprimer </a>
</div>

<?php
$content = ob_get_clean();
$titre = "Les personnages de Spy X Family";
require "template.php";







?>