
<?php

require "Lapin.php";
require "Chasseur.php";
$lapin= new Lapin(true, "blanc",4);
$chasseur= new Chasseur("fusil", "Paul");

echo "Le lapin " . $lapin->getCouleur() . " à " . $lapin->getNbPattes() . " pattes a été créé" . "\n";
echo "Le chasseur " . $chasseur->getNom() . " a été créer avec un " . $chasseur->getArme() . "\n";


while($lapin->getEnvie()){
    if($lapin->getEnvie()%2==0){
        $lapin->setEnvie(true);
        echo $lapin->seNourrir();
        echo $chasseur->seDeplacer();
        echo $lapin->crier();
        echo $chasseur->chasser();
        echo $lapin->seDeplacer();
    }
    else{
        $lapin->setEnvie(false);
        echo $lapin->seNourrir();
        echo $chasseur->seDeplacer();
        echo $lapin->crier();
        echo $chasseur->chasser();
        echo $lapin->seDeplacer();
    }
}

?>
