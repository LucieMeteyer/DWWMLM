<?php
require "Armes.php";
class Player
{
    private static $identifiant = 1;
    private $id;
    private $nom;
    private $force;
    private $pv;
   

    public function __construct($nom, $force, $pv)
    {
        $this->nom = $nom;
        $this->force = $force;
        $this->pv = $pv;
        $id = self::$identifiant++;
        $this->id = $id;
    }

    //getter

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function getForce()
    {
        return $this->force;
    }
    public function getPv()
    {
        return $this->pv;
    }

    //setter

    public function setId()
    {
        return $this->id;
    }

    public function setNom()
    {
        return $this->nom;
    }
    public function setForce()
    {
        return $this->force;
    }
    public function setPv()
    {
        return $this->pv;
    }


    public function presentation()
    {
        echo $this->id . "<br>";
        echo "<b>Nom : </b>" . $this->nom . "<br/>" . "<b>Force : </b>" . $this->force . "<br/>" . "<b>Pv : </b>" . $this->pv . "<br>";
    }
}
?>