<?php

$nb1=readline("Ecrire un premier nombre");
$nb2=readline("Ecrire un deuxième nombre");
$reste;
if($nb1>$nb2){
    $reste=$nb1%$nb2;
    $nb1=$nb2;
    $nb2=$reste;
}
while($reste!=0){
    $reste=$nb1%$nb2;
    $nb1=$nb2;
    $nb2=$reste;
}
echo "Le PGCD vaut : " . $nb1;

?>