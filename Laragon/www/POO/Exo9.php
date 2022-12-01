<?php ob_start() ?>


<?php
require "Player.php";
require "Armes.php";

$player1 = new Player("Ezreal", 600, 1500);
$player2 = new Player("Yone", 600, 1500);
$recupPlayers = [$player1, $player2];

$arme1 = new Armes("Lame d'infini", 500);
$armes2=new Armes("Guinsoo", 500);
$recupArmes = [$arme1, $arme2];

foreach ($recupPlayers as $value) {
    $value->presentation();
    echo $recupArmes;
     
}
foreach ($recupArmes as $value) {
    $value->presentation();


     
}

?>



<?php
$content = ob_get_clean();
$titre = "Exercice 9 : Static";
require "template.php"
?>