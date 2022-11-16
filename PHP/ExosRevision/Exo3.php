<?php
$i=0;
$nb1=readline ("Entrer un nombre : ");
$nb2=rand(101, 999);

do{
    $i++;
    echo "******************** essai n° " . $i . " ********************" . "\n" . $nb2=rand(101, 999) ."\n";
}
while($nb1 != $nb2)
?>