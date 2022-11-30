<?php
$saisie=readline("Combien de valeur voulez vous mettre ?");
$somme=0;
$tab=[];
for($i=1;$i<=$saisie;$i++){
    $notes=readline("nombre ");
    $tab[$i]=$notes;
    $somme=$notes+$somme;
}
$nb=0;
$moy=$somme/$saisie;
for($i=0;$i<count($tab);$i++){
    if($tab[$i]>$moy){
        $nb++;
    }

} 
echo"moyenne ". round($moy,2);
echo "Les notes au dessus de la moyenne sont " . $nb;
?>