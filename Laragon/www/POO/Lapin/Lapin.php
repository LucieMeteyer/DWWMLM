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
        echo " Le lapin blanc s’enfuie sur ses 4 pattes d’un seul bond ! ";
    }

    public function seNourrir(){
        echo " Le lapin se nourri ";
    }

}
?>