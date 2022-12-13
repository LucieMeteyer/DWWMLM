<?php
require_once "classeRectangle.php";

class Pave extends Rectangle {
    private $hauteur;

    public function __construct(int $hauteur, int $longueur,int $largeur){
        $this->hauteur=$hauteur;
        $this->longueur=$longueur;
        $this->largeur=$largeur;
    }

    // getter
    public function getHauteur(){return $this->hauteur;}
    public function getLongueur(){return $this->longueur;}
    public function getLargeur(){return $this->largeur;}
    // setter
    public function setHauteur($hauteur){$this->hauteur=$hauteur;}
    public function setLongueur($longueur){$this->longueur=$longueur;}
    public function setLargeur($largeur){$this->largeur=$largeur;}

    public function Volume(){
        return $this->longueur*$this->hauteur*$this->largeur ;}

    public function Afficher($infoPave){
        echo "\n-Périmètre : ".$infoPave->perimetre()."\n-Volume : ".$infoPave->Volume();
    }
}
?>