<?php ob_start() ?>



<?php
require "Fonctions.php";
$tab1= ['Nom : ' =>"Marie", 'Age : ' => 32, 'Sexe : ' => "Femme"];
$tab2= ['Nom : ' =>"Fifi", 'Age : ' => 32, 'Sexe : ' => "Homme"];

echo affiche($tab1);

echo "--------------------" . "<br>";

echo affiche($tab2);
?>



<?php
$content = ob_get_clean();
$titre = "Exercice 1";
require "../template.php"
?>