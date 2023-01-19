<?php
require_once "Model.class.php";
require_once "recette.class.php";

class RecetteManager extends Model
{
    private $recettes;


    public function ajoutRecette($recette)
    {
        $this->recettes[] = $recette;
    }


    //getter
    public function getRecettes()
    {
        return $this->recettes; //tableau de recette
    }

    public function chargementRecettes()
    {
        $req = $this->getBdd()->prepare("SELECT * FROM recettes"); //La requête
        $req->execute();
        $mesrecettes = $req->fetchAll(PDO::FETCH_ASSOC); // fetchALL pour éviter les doublons
        $req->closeCursor();

        foreach ($mesrecettes as $recette) {
            $r = new Recette($recette['id'], $recette['image'], $recette['nom'], $recette['ingredients'], $recette['etapes']);
            $this->ajoutRecette($r);
        }
    }

    public function getRecetteById($id)
    {
        for ($i = 0; $i < count($this->recettes); $i++) {
            if ($this->recettes[$i]->getId() === $id) {
                return $this->recettes[$i];
            }
        }
    }

    public function ajoutRecetteBd($nom, $image, $ingredients, $etapes)
    {
        $req = " 
    INSERT INTO recettes (nom, image, ingredients, etapes)
    values (:nom, :image, :ingredients, :etapes)";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":nom", $nom, PDO::PARAM_STR); //liaison de nom de la bdd a la var $nom
        $stmt->bindValue(":image", $image, PDO::PARAM_STR); //liaison de image de la bdd a la var $image
        $stmt->bindValue(":ingredients", $ingredients, PDO::PARAM_STR); //liaison de ingredients de la bdd a la var $ingredients
        $stmt->bindValue(":etapes", $etapes, PDO::PARAM_STR); //liaison de etapes de la bdd a la var $etapes
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if ($resultat > 0) {
            $recette = new Recette($this->getBdd()->lastInsertId(), $nom, $image, $ingredients, $etapes);
            $this->ajoutRecette($recette);
        }
    }
    public function suppressionRecetteBd($id)
    {
        $req = "
        Delete from recettes where id = :idRecette 
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt ->bindValue(":idRecette", $id, PDO::PARAM_INT);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
        if($resultat > 0){
            $recette = $this->getRecetteById($id);
            unset($recette);
        }
    }

    public function modificationRecetteBd($id, $nom, $image, $ingredients, $etapes){
        $req="
        update recettes 
        set nom=:nom, image=:image, ingredients=:ingredients, etapes=:etapes
        where id=:id
        ";
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT); //liaison de id de la bdd a la var $id
        $stmt->bindValue(":nom", $nom, PDO::PARAM_STR); //liaison de nom de la bdd a la var $nom
        $stmt->bindValue(":image", $image, PDO::PARAM_STR); //liaison de image de la bdd a la var $image
        $stmt->bindValue(":ingredients", $ingredients, PDO::PARAM_STR); //liaison de ingredients de la bdd a la var $ingredients
        $stmt->bindValue(":etapes", $etapes, PDO::PARAM_STR); //liaison de etapes de la bdd a la var $etapes
        $resultat = $stmt->execute();
        $stmt->closeCursor();

        if($resultat > 0 ){
            $this->getRecetteById($id)->setNom($nom);
            $this->getRecetteById($id)->setImage($image);
            $this->getRecetteById($id)->setIngredients($ingredients);
            $this->getRecetteById($id)->setEtapes($etapes);
        }

    }
}
