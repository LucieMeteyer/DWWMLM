<?php
require "Animal.php";

class Lapin extends Animal
{
    private $enVie;
    

    public function __construct($enVie,$couleur, $nbPattes)
    {
        $this->enVie = $enVie;
        Animal::__construct($couleur, $nbPattes);
    }

    //getter

    public function getEnVie()
    {
        return $this->enVie;
    }

    //setter

    public function setEnVie($enVie)
    {
        $this->enVie = $enVie;
    }

    public function fuir(){
       return "Le lapin blanc s’enfuie sur ses "  . $this->nbPattes . " pattes d’un seul bond ! " . "\n";
    }

    public function seNourrir(){
       return "Le lapin se nourri " . "\n";
    }

}
?>