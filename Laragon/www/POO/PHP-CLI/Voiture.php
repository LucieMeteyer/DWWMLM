<?php
class Voiture
{
    private $couleur;
    private $marque;
    private $modele;
    private $nbKm;
    private $motorisation;

    public function __construct($couleur, $marque, $modele, $nbKm, $motorisation)
    {
        $this->couleur = $couleur;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbKm = $nbKm;
        $this->motorisation = $motorisation;
    }

    //getter

    public function getCouleur()
    {
        return $this->couleur;
    }
    public function getMarque()
    {
        return $this->marque;
    }
    public function getModele()
    {
        return $this->modele;
    }
    public function getNbKm()
    {
        return $this->nbKm;
    }
    public function getMotorisation()
    {
        return $this->motorisation;
    }

    //setter

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }
    public function setModele($modele)
    {
        $this->modele = $modele;
    }
    public function setNbKm($nbKm)
    {
        $this->nbKm = $nbKm;
    }
    public function setMotorisation($motorisation)
    {
        $this->motorisation = $motorisation;
    }


    public function __toString()
    {
        $afficher = "Cette voiture est un modèle " . $this->modele . " de la marque " . $this->marque . "," . " de couleur  " . $this->couleur  . " de motorisation " . $this->motorisation . " avec " . $this->nbKm . " Kilomètres" . "<br>";

        return $afficher;
    }

    public function rouler($ajoutkm){
       $this->nbKm = $this->nbKm + $ajoutkm;
        echo $this->nbKm;
    }
}


