<?php

$jour=readline("Mettre le jour");
$mois=readline("Mettre le mois");
$annee=readline("Mettre l'annee");
if(($annee%4==0) && ($annee%100!=0) || ($annee%400==0)){
    echo "Annee bisextile";
}
else{
    echo "Annee non-bisextile";
}






?>