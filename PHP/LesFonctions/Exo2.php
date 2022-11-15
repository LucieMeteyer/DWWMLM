<?php

require "Fonctions.php";
$nb1=readline("Ecrire un premier nombre ");
$nb2=readline("Ecrire un deuxième nombre ");
$reste;

echo "Le PGCD est de : " . PGCD ($nb1, $nb2);
?>