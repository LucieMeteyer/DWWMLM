<?php ob_start() ?>

<?php
$nom = "Marie";
$nom2 = "Pierre";
$age = "30";
$age2 = "32";
$homme = false;
$homme2=true;

if (!$homme) {
echo $nom . " a " .  $age . " ans et c'est une femme " . "<br>";
}
if($homme2){
    echo $nom2 . " a " .  $age2 . " ans et c'est un homme";
}


?>

<?php

$content = ob_get_clean();
$titre = "Exercice 1";
require "../template.php"
?>