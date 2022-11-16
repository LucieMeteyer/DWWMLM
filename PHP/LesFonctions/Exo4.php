<?php

require "Fonctions.php";
$nb=readline ("Entrez un nombre");
$i=0;

for($i=1;$i<=10;$i++){
    echo Multi($nb, $i) . "\n";
}

?>