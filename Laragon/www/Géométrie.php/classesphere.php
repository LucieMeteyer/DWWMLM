<?php
require_once "classeCercle.php";

class sphere extends Cercle{

    public function __construct($diametre){
        $this->diametre=$diametre;
    }
// getter
    public function getDiametre(){return $this->diametre;}
// setter
    public function setDiametre($diametre){$this->diametre=$diametre;}

    public function volume(){
        return round((4/3)*pi()*$this->diametre/2**3,2);
    }

    public function afficher($infos){
        echo "\n-Volume : ".$infos->volume();

    }
}
?>