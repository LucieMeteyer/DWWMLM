<?php
require_once "Model.class.php";
require_once "livre.class.php";

class LivreManager extends Model
{
    private $livres;


    public function ajoutLivre($livre)
    {
        $this->livres[] = $livre;
    }


    //getter
    public function getLivres()
    {
        return $this->livres; //tableau de livre
    }

    public function chargementLivres()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM livres"); //La requête
        $req->execute();
        $meslivres = $req->fetchAll(PDO::FETCH_ASSOC); // fetchALL pour éviter les doublons
        $req->closeCursor();

        foreach ($meslivres as $livre) {
            $l = new Livre($livre['id'], $livre['titre'], $livre['nbPages'], $livre['image']);
            $this->ajoutLivre($l);
        }
    }

    public function getLivreById($id)
    {
        for ($i = 0; $i < count($this->livres); $i++) {
            if ($this->livres[$i]->getId() === $id) {
                return $this->livres[$i];
            }
        }
    }

    public function ajoutLivreBd($titre, $nbPages, $image)
    {
        $req = " 
    INSERT INTO livres (titre, nbPages, image)
    values (:titre, :nbPages, :image)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":titre", $titre, PDO::PARAM_STR); //liaison de titre de la bdd a la var $titre
        $stmt->bindValue(":nbPages", $nbPages, PDO::PARAM_INT); //liaison de nbPages de la bdd a la var $nbPages
        $stmt->bindValue(":image", $image, PDO::PARAM_STR); //liaison de image de la bdd a la var $image
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if ($resultat > 0) {
            $livre = new Livre($this->getBdd()->lastInsertId(), $titre, $nbPages, $image);
            $this->ajoutLivre($livre);
        }
    }
    public function suppressionLivreBd($id)
    {
        $req = "
        Delete from livres where id = :idLivre 
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt ->bindValue(":idLivre", $id, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
        if($resultat > 0){
            $livre = $this->getLivreById($id);
            unset($livre);
        }
    }

    public function modificationLivreBd($id, $titre, $nbPages, $image){
        $req="
        update livres 
        set titre=:titre, nbPages=:nbPages, image=:image
        where id=:id
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT); //liaison de id de la bdd a la var $id
        $stmt->bindValue(":titre", $titre, PDO::PARAM_STR); //liaison de titre de la bdd a la var $titre
        $stmt->bindValue(":nbPages", $nbPages, PDO::PARAM_INT); //liaison de nbPages de la bdd a la var $nbPages
        $stmt->bindValue(":image", $image, PDO::PARAM_STR); //liaison de image de la bdd a la var $image
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0 ){
            $this->getLivreById($id)->setTitre($titre);
            $this->getLivreById($id)->setNbPages($nbPages);
            $this->getLivreById($id)->setImage($image);
        }

    }
}
