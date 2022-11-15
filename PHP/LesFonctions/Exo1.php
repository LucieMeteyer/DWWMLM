<?php

require "Fonctions.php";

$PxHT=readline("Prix Hors-Taxe : ");
$q=readline("Nombres d'articles : ");

echo pxTTC ($PxHT, $q) . "€";



?>