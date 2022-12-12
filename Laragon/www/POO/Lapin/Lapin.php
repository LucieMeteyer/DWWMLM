<?php
class Lapin extends Animal
{
    private $enVie;
    

    protected function __construct($enVie,$couleur, $nbPattes)
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
        echo " ";
    }

    public function seNourrir(){
        echo " ";
    }

}
?>