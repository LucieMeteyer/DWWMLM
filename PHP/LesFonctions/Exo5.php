<?php

require "Fonctions.php";
$nb=readline("Entrez un nombre : ");
$i= 2;
$factorielle = 1;



echo "La factorielle de " . $nb . " est de : " . Facto ($nb, $i, $factorielle) . "\n";
?>
