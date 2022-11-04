<?php

$nb1=readline("Entrer un premier nombre ");
$nb2=readline("Entrer un deuxième nombre ");
if(($nb1>0 && $nb2>0) || ($nb1<0 && $nb2<0)){
    echo "positif";
}
elseif($nb1==0 || $nb2==0){
    echo "nul";
}
else{
    echo "négatif";
}





?>