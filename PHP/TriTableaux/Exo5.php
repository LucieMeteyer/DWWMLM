<?php
$nb=readline("Combien de valeurs voulez vous mettre ?");
$tab=[];

$entree=false;
for($i=0;$i<$nb;$i++){
    $saisie=readline("Entrez les mots que vous voulez ");
    $tab[$i]=$saisie;

    if($tab[$i>=2]){
        echo "doublons";
        $entree=true;     
    }
}


if($entree==false){
    echo "pas de doublons";
}
?>