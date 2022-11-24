<?php ob_start() ?>



<?php
require "Fonctions.php";
$tab = [1,2,3];

//******Affiche le tableau passé en paramètre******//

echo afficherTableau($tab);
echo "*********************". "<br>";


//******Retourne la moyenne d’un tableau d’entiers******//
$tab=[1,2,3,4,5,6,7,8,9,10,11];

echo calculerMoyenne ($tab);
echo  "<br>" . "*********************". "<br>";

//******Retourne un booléen indiquant sur un tableau ne contient que des valeurs paires******//
$tab=[2,4,6];

echo estTableauPair($tab);
?>



<?php
$content = ob_get_clean();
$titre = "Exercice 3";
require "../template.php"
?>