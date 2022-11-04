<?php

$heures=readline("Entrer l'heure ");
$minutes=readline("Entrer les minutes ");
$minutes=$minutes+1;
if($minutes==60){
    $minutes=0;
    $heures=$heures+1;
}
if($heures>=24){
    $heures=$heures-24;
}
echo "Dans une minute, il sera " . $heures .  "h" .  $minutes;





?>