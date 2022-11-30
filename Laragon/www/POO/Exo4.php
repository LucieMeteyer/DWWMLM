<?php ob_start() ?>

<?php
class Voiture
{

    private $marque;
    private $model;
    private $couleur;
    private $nbPortes;
    private $electrique;

    public function __construct($marque, $model, $couleur, $nbPortes, $electrique)
    {

        $this->marque = $marque;
        $this->model = $model;
        $this->couleur = $couleur;
        $this->nbPortes = $nbPortes;
        $this->electrique = $electrique;
    }

    //getter

    public function getMarque()
    {
        return $this->marque;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function getCouleur()
    {
        return $this->couleur;
    }
    public function getNbPortes()
    {
        return $this->nbPortes;
    }
    public function getElectrique()
    {
        return $this->electrique;
    }

    //setter

    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;
    }

    public function setElectrique($electrique)
    {
        $this->electrique = $electrique;
    }

    public function afficher()
    {
        echo "Marque :   $this->marque . <br> .  Model : $this->model . <br> .  Couleur :  $this->couleur . <br> . Nombre de portes : $this->nbPortes  portes . <br> . Electrique : $this->electrique";
    }
}



$voiture1 = new Voiture("Renault", "Kadjar", "Gris", 5, false);
$voiture2 = new Voiture("Peugeot", "206", "Blanc", 5, false);
$voiture3 = new Voiture("Tesla", "S", "Blanc", 5, true);
$voiture4 = new Voiture("Renault", "ZOE", "Bleu", 3, true);

$voitures = [$voiture1, $voiture2, $voiture3, $voiture4];

foreach ($voitures as $voiture) {

    if ($voiture->getElectrique() === true) {
        $car = "Electrique";
    } else {
        $car = "Essence";
    }
    echo "Marque : " .  $voiture->getMarque() .  "<br>" .  "Model : " . $voiture->getModel() . "<br>" .  "Couleur : " .  $voiture->getCouleur() . "<br>" . "Nombre de portes : " .  $voiture->getNbPortes() . "portes" . "<br>"  .  $car . "<br>";
    echo "----------------------------------- " . "<br>";
}
echo "-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------";
?>

<form action="" method="get">
    <center>
        <input type="submit" value=Renault name=Renault>
        <input type="submit" value=Tesla name=Tesla>
        <input type="submit" value=Peugeot name=Peugeot>
    </center>
</form>

<?php

if (isset($_GET["Renault"])){
    foreach ($voitures as $voiture) {
        if ($marque=$voiture->getMarque()=="Renault") {
            echo "Marque : " .  $voiture->getMarque() .  "<br>" .  "Model : " . $voiture->getModel() . "<br>" .  "Couleur : " .  $voiture->getCouleur() . "<br>" . "Nombre de portes : " .  $voiture->getNbPortes() . "portes" . "<br>"  .  $car . "<br>";
            echo "----------------------------------- " . "<br>";
        }
    }
}

if (isset($_GET["Tesla"])){
    foreach ($voitures as $voiture) {
        if ($marque=$voiture->getMarque()=="Tesla") {
            echo "Marque : " .  $voiture->getMarque() .  "<br>" .  "Model : " . $voiture->getModel() . "<br>" .  "Couleur : " .  $voiture->getCouleur() . "<br>" . "Nombre de portes : " .  $voiture->getNbPortes() . "portes" . "<br>"  .  $car . "<br>";
            echo "----------------------------------- " . "<br>";
        }
    }
}

if (isset($_GET["Peugeot"])){
    foreach ($voitures as $voiture) {
        if ($marque=$voiture->getMarque()=="Peugeot") {
            echo "Marque : " .  $voiture->getMarque() .  "<br>" .  "Model : " . $voiture->getModel() . "<br>" .  "Couleur : " .  $voiture->getCouleur() . "<br>" . "Nombre de portes : " .  $voiture->getNbPortes() . "portes" . "<br>"  .  $car . "<br>";
            echo "----------------------------------- " . "<br>";
        }
    }
}
?>

<?php
$content = ob_get_clean();
$titre = "Exercice 4";
require "template.php"
?>