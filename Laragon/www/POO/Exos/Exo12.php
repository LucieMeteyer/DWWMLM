<?php ob_start() ?>

<?php
require "ChainePlus.php";

$chaine = new ChainePlus ( "Programmation orientée objet en PHP");

echo "Majuscules : " ;
echo $chaine->majuscule();

echo "Italique : " ;
echo $chaine->italique();

echo "Gras : " ;
echo $chaine->gras();

echo "Souligner : " ;
echo $chaine->souligne();



?>



<?php
$content = ob_get_clean();
$titre = "Exercice ChainePlus";
require "../template.php"
?>