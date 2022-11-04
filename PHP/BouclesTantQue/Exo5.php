<?php

$nb1=readline("Ecrire un premier nombre");
$nb2=readline("Ecrire un deuxième nombre");
$nb3=$nb1;
$nb4=$nb2;
$PPCM;
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
echo "Le PPCM vaut : " . $nb1;
$PPCM=$nb3*$nb4/$nb1;
echo "Le PPCM vaut : " . $PPCM;

?>