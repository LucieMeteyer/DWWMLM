<?php ob_start() ?>

<?php
require "Fonctions.php";
$nb1=5;
$nb2=122;

echo pair($nb1);
echo pair ($nb2);
?>

<?php
$content = ob_get_clean();
$titre = "Exercice 2";
require "../template.php"
?>