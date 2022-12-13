<?php
class TriangleRectangle{
    private $base;
    private $hauteur;

    public function __construct($base,$hauteur){
        $this->base=$base;
        $this->hauteur=$hauteur;
    }
    // getter
    public function getBase(){return $this->base;}
    public function getHauteur(){return $this->hauteur;}
    // setter
    public function setBase($base){$this->base=$base;}
     function setHauteur($hauteur){$this->hauteur=$hauteur;}

    public function Perimetre(){
        $x=($this->base*$this->base)+($this->hauteur*$this->hauteur);
        return round($this->base+$this->hauteur+sqrt($x),2);
    }

    public function Aire(){
        return ($this->base * $this->hauteur)/2;
    }

    public function AfficherTriangle($infosTriangleRec){
        echo "- Base : ".$this->base."\n- Hauteur : ".$this->hauteur."\n- Périmètre : ".$infosTriangleRec->Perimetre()."\n- Aire : "
        .$infosTriangleRec->Aire();
    }
}

?>