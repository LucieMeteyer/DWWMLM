<?php

$nb=readline("Entrez un prix en euros : ");
$devise=array("Angleterre : "=> 0.88,"USA : "=> 1.04,"Canada : "=>1.38,"Japon : "=>145.05,"Mexique : "=>20.12,"Maroc : "=>11.16,"Inde : "=>84.40);
$echange=0;

foreach($devise as $key => $value){
    $echange=$nb*$value;
    echo $key . $echange . "\n";
}






?>