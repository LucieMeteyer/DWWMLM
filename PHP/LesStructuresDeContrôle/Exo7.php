<?php

$heures=readline("Entrer l'heure");
$minutes=readline("Entrer les minutes");
$secondes=readline("Entrer les secondes");
$secondes=$secondes+1;
if($minutes==60){
    $minutes=0;
    $heures=$heures+1;
}
if($heures>=24){
    $heures==$heures-24;
}
if($secondes==60){
    $secondes=0;
    $minutes=$minutes+1;
}

echo "Dans une seconde, il sera" . $heures . "h" . $minutes . "et" . $secondes . "secondes.";


?>