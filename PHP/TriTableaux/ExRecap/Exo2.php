<?php
$saisie=readline("Ecrivez une phrase : ");
$tab = ["a","e","i","o","u","y"];
$compteVoyelle=0;

    $letters = str_split($saisie); 
    for ($j =0; $j <count($letters); $j++){
        for ($k =0; $k < count($tab);$k++) {
            if($letters[$j] == $tab[$k]){
                $compteVoyelle++;
            }
        }
    }

echo "Il y a " . $compteVoyelle . " voyelles dans votre phrase" ;
?>