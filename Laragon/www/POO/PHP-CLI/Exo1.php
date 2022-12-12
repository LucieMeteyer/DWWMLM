
<?php ob_start() ?>

<?php

require "Voiture.php";
$voiture1 = new Voiture("Grise", "Citroen", "C4", 10000, "Essence");
$voiture2 = new Voiture("Rouge", "Renault", "Kadjar", 15000, "Diesel" );
$voitures = [$voiture1, $voiture2];

foreach($voitures as $value){
    echo $value->__toString();
    echo "<br>"."-------------------------------------------------------------------------------------------------------------------------------------------------------------------" . "<br>";

}

$voiture1->rouler(200);
echo $voiture1;
echo "<br>"."-------------------------------------------------------------------------------------------------------------------------------------------------------------------" . "<br>";
$voiture2->rouler(200);
echo $voiture2;
?>


<?php
$content = ob_get_clean();
$titre = "Exercice Voiture";
require "../template.php"
?>