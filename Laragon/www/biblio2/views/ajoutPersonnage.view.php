<?php ob_start()?>

ajout d'un personnage

<?php
$content = ob_get_clean();
$titre = "Ajout d'un livre";
require "template.php";
?>