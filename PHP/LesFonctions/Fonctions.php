<?php

function pxTTC ($pxHT, $q){
    echo "Le prix TTC est : ";
    return($pxHT*$q*1.2);
}

function PGCD ($nb1, $nb2){
    

    while($nb2>0){
        $reste=$nb1%$nb2;
        $nb1=$nb2;
        $nb2=$reste;
    }
    return $nb1;
}

function PPCM ($nb1, $nb2){
    echo "Le PPCM est de : ";
    return ($nb1*$nb2/PGCD($nb1,$nb2));
    
}

function Multi ($nb, $i){
    
    return ($nb*$i);
}

function Facto ($nb, $i, $factorielle){
    for ($i=2; $i<$nb ;$i++){
        $factorielle = $factorielle * $i;
    }
    return ($factorielle * $i);
}

function Add ($tab){
return(array_sum($tab));
}

function Etoiles ($i, $nb){
    
    while ($i<$nb){
        for ($j=0; $j<$i; $j++){
            echo "* ";
        }
        echo "\n";
        $i++;
    }
    while ($i>0){
        for ($j = 0 ; $j<$i ; $j++){
            echo "* ";
        }
        echo "\n";
        $i--;
    }
    return;
}
?>