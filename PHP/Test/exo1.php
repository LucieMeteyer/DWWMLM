<?php
$tab=[];
$notes;
$somme=0;
$moy=0;
for($i=0;$i<3;$i++){
    $notes=readline("Entrer une note");
    $somme=$somme+$notes;
    $moy=$somme/3;
}
echo $moy;






?>