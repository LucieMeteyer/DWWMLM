<?php

$sexe=readline("Quel est votre sexe ?");
$age=readline("Quel age avez-vous ?");
if(($sexe="homme" && $age>=20) || ($sexe="femme" && $age>=18) && ($sexe="femme" && $age<=35)){
    echo "imposable";
}
else{
    echo "non-imposable";
}






?>