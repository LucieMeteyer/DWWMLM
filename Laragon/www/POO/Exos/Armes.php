<?php

class Armes
{
    private static $identifiant = 1;
    private $id;
    private $nom;
    private $degat;

   

    public function __construct($nom, $degat)
    {
        $this->nom = $nom;
        $this->degat = $degat;
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
    public function getDegat()
    {
        return $this->degat;
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
    public function setDegat()
    {
        return $this->degat;
    }

    public function presentation(){
        echo $this->id . "<br>";
        echo "<b>Nom : </b>" . $this->nom . "<br/>" . "<b>degat : </b>" . $this->degat . "<br/>";
    }

    }

    

?>