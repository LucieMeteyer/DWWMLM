<?php ob_start() ?>


<?php
class Ville
{
    public  $nomville;
    public $departement;

    public function __construct($nomville, $departement)
    {

        $this->nom = $nomville;
        $this->departement = $departement;
        echo $this->nom . " se situe dans le département du " . $this->departement . "<br>";
    }

    public function afficher()
    {
        
    }
}

$ville1 = new Ville("Dunkerque", "Nord (59) ");
$ville2 = new Ville("Arras", "Pas-de-Calais (62)");
?>


<?php
$content = ob_get_clean();
$titre = "Exercice 2";
require "template.php"
?>