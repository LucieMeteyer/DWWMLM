<?php
require_once "Humain.php";
class Chasseur extends Humain
{
    private $arme;


    protected function __construct($arme, $nom)
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
        echo "";
    }
}
