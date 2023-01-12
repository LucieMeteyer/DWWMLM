<?php
require_once "models/PersonnagesManager.class.php";

Class PersonnagesController  {
    private $personnagesManager;


public function __construct(){
    $this->personnagesManager = new PersonnagesManager;
    $this->personnagesManager->getPersonnages();
}

public function afficherPersonnages(){
    $personnages=$this->personnagesManager->getPersonnages();
    require "views/personnages.view.php";
    
}

public function afficherPersonnage($id){
   $personnage = $this->personnagesManager->getPersonnageById($id);
   require "views/afficherPersonnage.view.php";
}

public function ajoutPersonnage(){
    require "views/ajoutPersonnage.view.php";
}




}
