<?php
require_once "Deplacement.php";
 abstract class Animal implements Deplacement
{
    private $couleur;
    private $nbPattes;

    protected function __construct($couleur, $nbPattes)
    {
        $this->couleur = $couleur;
        $this->nbPattes = $nbPattes;
       
    }

    //getter

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function getNbPattes()
    {
        return $this->nbPattes;
    }

    //setter

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    public function setNbPattes($nbPattes)
    {
        $this->nbPattes = $nbPattes;
    }

    public function crier(){
        echo " Le lapin glapie de peur ";
    }

    public function seDeplacer()
    {
    }


}
?>