<?php
$nb=(int)readline("Entrez un nombre ");
$max=$nb;
$min=$nb;

for($i=1; $i<=5; $i++){
    $nb=readline("Entrez un nombre ");

    if($max<$nb){
        $max=$nb;
    }
    if($min>$nb){
        $min=$nb;
    }
}

echo "max" . $max . "\n min " . $min;


?>