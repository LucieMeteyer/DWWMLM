<?php
$saisie=readline("Combien de valeur voulez vous mettre ?");
$max=$saisie;
$min=$saisie;
$tab=[];
for($i=1;$i<=$saisie;$i++){
    $nb=readline("Ecrire un nombre" . "\n");
    $tab[$i]=$nb;
    if($max>$saisie){
        $max=$saisie;
    }
    
    

}
$pos=array_search($max,$tab);
echo "Le nombre le plus grand nombre est " . $max . "\n Et son postionnement dans le tableau est " . $pos;






?>