<?php
class Humain implements Deplacement
{
    private $nom;
    

    protected function __construct($nom)
    {
        $this->nom = $nom;
       
    }

    //getter

    public function getNom()
    {
        return $this->nom;
    }

    //setter

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function seDeplacer($deplacement)
    {
        $this-> deplacement = $deplacement;
    }




}
?>