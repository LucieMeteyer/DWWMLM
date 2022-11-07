<?php
$nb=readline("Ecrire un nombre ");
$fact=1;

for($i=1; $i<=$nb;$i++){
    $fact = $fact * $i;
}

echo "La factorielle de "  . $nb .  " est " . $fact;


?>