<?php
require_once "Model.class.php";
require_once "livre.class.php";

Class LivreManager extends Model {
    private $livres;
    

    public function ajoutLivre($livre)
    {
        $this-> livres[] = $livre;
   
    }


//getter
public function getLivres(){
     return $this->livres; //tableau de livre
    }

    public function chargementLivres(){
        $req=$this->getBdd()->prepare("SELECT * FROM livres"); //La requête
        $req->execute();
        $meslivres = $req->fetchAll(PDO::FETCH_ASSOC); // fetchALL pour éviter les doublons
        $req->closeCursor();

        foreach($meslivres as $livre){
            $l = new Livre($livre['id'], $livre['titre'], $livre['nbPages'], $livre['image']);
            $this->ajoutLivre($l);
        }
    }

public function getLivreById($id){
    for($i=0; $i < count($this->livres); $i++){
        if($this->livres[$i]->getId() === $id){
            return $this->livres[$i];
        }
    }

}

}



?>