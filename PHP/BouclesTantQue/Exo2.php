<?php

$nb=readline("Ecrire un nombre entre 10 et 20 ");
While($nb<10){
    echo "Plus grand ! " . "\n";
    $nb=readline("Ecrire un nombre entre 10 et 20 ");
}

While($nb>20){
    echo "Plus petit ! " . "\n";
    $nb=readline("Ecrire un nombre entre 10 et 20 ");
}

echo "GG !"

?>