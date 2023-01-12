<?php
require_once "Model.class.php";
require_once "personnages.class.php";

Class PersonnagesManager extends Model {
    private $personnages;
    

    public function ajoutPersonnages($personnage)
    {
        $this-> personnages[] = $personnage;
   
    }


//getter
public function getPersonnages(){
     return $this->personnages; //tableau de personnages
    }

    public function chargementPersonnages(){
        $req=$this->getBdd()->prepare("SELECT * FROM personnages"); //La requête
        $req->execute();
        $mesPersonnages = $req->fetchAll(PDO::FETCH_ASSOC); // fetchALL pour éviter les doublons
        $req->closeCursor();

        foreach($mesPersonnages as $personnage){
            $p = new Personnage($personnage['id'], $personnage['prenom'], $personnage['nom'], $personnage['age'], $personnage['specialite'], $personnage['image']);
            $this->ajoutPersonnages($p);
        }
    }

    public function getPersonnageById($id){
        for($i=0; $i < count($this->personnages); $i++){
            if($this->personnages[$i]->getId() === $id){
                return $this->personnages[$i];
            }
        }



}
}


?>