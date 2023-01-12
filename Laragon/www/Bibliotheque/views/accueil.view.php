<?php ob_start()?>

ici la page d'accueil

<?php
$content = ob_get_clean();
$titre = "Bibliothèque de Lulu";
require "template.php";







?>