<?php

$prixHT=readline("Prix HT");
$nbArticles=readline("Nombre d'articles");
$prixTTC=$prixHT*$nbArticles*(1+20/100);

echo "Le prix TTC est de " . $prixTTC;


?>