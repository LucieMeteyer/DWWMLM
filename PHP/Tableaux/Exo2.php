<?php
$saisie=readline("Combien de valeur voulez vous mettre ?");
$nbplus=0;
$nbmoins=0;
$tab=[];
for($i=0;$i<$saisie;$i++){
    $nb=readline("Ecrire un nombre" . "\n");
    $tab[$i]=$nb;
    if($nb<0){
        $nbmoins++;
    }
    elseif($nb>0){
        $nbplus++;
    }
}
echo "Il y a : " . $nbplus . " nombres positifs " . "\n" . "Il y a : " . $nbmoins .  " nombres négatifs ";
?>