<?php
require_once "Humain.php";
class Chasseur extends Humain
{
    private $arme;


    public function __construct($arme, $nom)
    {
        $this->arme = $arme;
        Humain::__construct($nom);
    }

    //getter

    public function getArme()
    {
        return $this->arme;
    }

    //setter

    public function setArme($arme)
    {
        $this->arme = $arme;
    }


    public function chasser()
    {
        $nb = rand(1, 6);
        if($nb == 1 or 6){
            echo " le touche";
        }
        else{
            echo " le rate";
        }
        return $this->getNom() . " tire sur le lapin avec son fusil et ... " . "\n"; 
    }

    public function seDeplacer()
    {
        $phrase=$this->getNom() . " avance avec son fusil" . "\n";
        return $phrase;
    }
   
}
