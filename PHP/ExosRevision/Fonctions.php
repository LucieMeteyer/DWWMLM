<?php
//*****************************************************
function pxTTC ($pxHT, $q){
    echo "Le prix TTC est : ";
    return($pxHT*$q*1.2);
}
//*****************************************************
function PGCD ($nb1, $nb2){
    

    while($nb2>0){
        $reste=$nb1%$nb2;
        $nb1=$nb2;
        $nb2=$reste;
    }
    return $nb1;
}
//*****************************************************
function PPCM ($nb1, $nb2){
    echo "Le PPCM est de : ";
    return ($nb1*$nb2/PGCD($nb1,$nb2));
    
}
//*****************************************************
function Multi ($nb, $i){
    for($i=0;$i<10;$i++){
        $nb*$i;
        
    }
    return ($nb*$i);
}
//*****************************************************
function comparaison ($nb1, $nb2){
if($nb1<$nb2){
    echo $nb1 . " est plus petit que " . $nb2;
}
elseif($nb1>$nb2){
    echo $nb1 . " est plus grand que " . $nb2;
}

elseif($nb1=$nb2){
    echo $nb1 . "et" . $nb2 . " sont égaux";
}
return;
}







?>