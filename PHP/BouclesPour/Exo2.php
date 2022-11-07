<?php
$nb=readline("Ecrire un nombre ");

$nbChang=(integer)$nb;
while($nbChang!=(integer)$nb){
$nb=readline("Ecrire un nombre ");
}


echo("Les 5 nombres précédents sont : ") . "\n";
for($i=1;$i<=5;$i++){
    echo $nb - $i . "\n";
}

echo("***************************************") . "\n";

echo("Les 5 nombres suivants sont : ") . "\n";
for($i=1;$i<=5;$i++){
    echo $nb + $i . "\n";
}




?>