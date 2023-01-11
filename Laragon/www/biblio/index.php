<?php ob_start()?>

ici la page d'accueil

<?php
$content = ob_get_clean();
$titre = "Personnages de Spy X Family";
require "template.php";







?>