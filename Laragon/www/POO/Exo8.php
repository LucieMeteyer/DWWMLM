<?php ob_start() ?>


<?php
require "Maison.php";

$maison1 = new Maison(2018, 3, 98);
$maison2 = new Maison(2019, 4, 120);
$maison3 = new Maison(2020, 4, 125);
$maison4 = new Maison(2021, 5, 130);
$recupMaisons = [$maison1, $maison2, $maison3, $maison4];

?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Date</th>
            <th scope="col">Nombre de chambres</th>
            <th scope="col">Surface</th>
        </tr>
    </thead>
    <tbody>
        <?php for ($i = 0; $i<count($recupMaisons); $i++) : ?>
            <tr>
                <th scope="row"><?= $recupMaisons[$i]->getId() ?></th>
                <td> <?= $recupMaisons[$i]->getDate() ?> </td>
                <td> <?= $recupMaisons[$i]->getChambres() ?> </td>
                <td> <?= $recupMaisons[$i]->getSurface() ?> </td>
            </tr>
        <?php endfor ?>
    </tbody>
</table>


<?php
$content = ob_get_clean();
$titre = "Exercice 8 : Static";
require "template.php"
?>