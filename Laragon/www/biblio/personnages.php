<?php 

require_once "PersonnagesManager.class.php";

$personnagesManager = new PersonnagesManager;
$personnagesManager->chargementPersonnages();

ob_start() 
?>

<table class="table text-center table-striped">
    <tr class="table-dark">
        <th> Image </th>
        <th> Prenom</th>
        <th> Nom </th>
        <th> Age </th>
        <th> Specialite </th>
        <th colspan="2"> Actions </th>
    </tr>
    <?php 
    $personnages=$personnagesManager->getPersonnages();
    for($i=0; $i<count($personnagesManager->getPersonnages()); $i++) : ?>
    <tr>
        <td class="align-middle"> <img src="public/images/<?= $personnages[$i]->getImage(); ?>" width="60px;" alt=""> </td>
        <td class="align-middle"> <?= $personnages[$i]->getPrenom();?></td>
        <td class="align-middle"> <?= $personnages[$i]->getNom();?></td>
        <td class="align-middle"> <?= $personnages[$i]->getAge();?></td>
        <td class="align-middle"> <?= $personnages[$i]->getSpecialite();?></td>
        <td class="align-middle"> <a href="" class="btn btn-outline-info"> Modifier </a></td>
        <td class="align-middle"> <a href="" class="btn btn-outline-danger"> Supprimer </a></td>
    </tr>
        <?php endfor; ?>
</table>
<a href="" class="btn btn-outline-light d-block"> Ajouter </a>

<?php
$content = ob_get_clean();
$titre = "Les personnages de Spy X Family";
require "template.php";







?>