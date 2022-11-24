<?php ob_start() ?>



<?php
require "Fonctions.php";
$tab1 = ['Nom : ' => "Marie", 'Age : ' => 32, 'Sexe : ' => "Femme"];
$tab2 = ['Nom : ' => "Pierre", 'Age : ' => 32, 'Sexe : ' => "Homme"];
$tab3 = ['Nom : ' => "Riri", 'Age : ' => 28, 'Sexe : ' => "Homme"];
$tab4 = ['Nom : ' => "Fifi", 'Age : ' => 38, 'Sexe : ' => "Femme"];

echo affiche($tab1);
echo "--------------------" . "<br>";
echo affiche($tab2);
echo "--------------------" . "<br>";
echo affiche($tab3);
echo "--------------------" . "<br>";
echo affiche($tab4);
?>



<?php
$content = ob_get_clean();
$titre = "Exercice 2";
require "../template.php"
?>