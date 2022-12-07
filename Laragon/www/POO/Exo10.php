<?php ob_start() ?>

<?php
require "Employe.php";
require "Cadre.php";
//////////////////////PARTIE EMPLOYE//////////////////////
$employe1 = new Employe("Neymar", "Jean", "1850389546458", 1500.56, "soudeur");
$employe2 = new Employe("Jeremy", "Simon", "179028955812", 1700.47, "assistant mecanicien" );
$employe3 = new Employe("Deray", "Odile", "285097154678", 1900.14, "magasinière");
$listEmploye = [$employe1, $employe2, $employe3];


foreach($listEmploye as $value){
    echo $value->__toString();
    echo $value->SonJob() . "<br>";
    echo "-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------" . "<br>";
    
}

//////////////////////PARTIE CADRE//////////////////////
$cadre1 = new Cadre("Alain", "Deloin", "1840259453666", 2100.23, "chef maintenance", $listEmploye);
$listCadre = [$cadre1];

foreach($listCadre as $value){
    echo $value->__toString();
    echo $value->SonJob() . "<br>";
}


?>


<?php
$content = ob_get_clean();
$titre = "Exercice 10";
require "template.php"
?>