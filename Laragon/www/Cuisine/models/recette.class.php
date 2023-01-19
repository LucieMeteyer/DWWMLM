<?php
Class Recette {
    private $id;
    private $image;
    private $nom;
    private $ingredients;
    private $etapes;


    public function __construct ($id,$image,$nom,$ingredients,$etapes)
    {
        $this-> id = $id;
        $this-> image = $image;
        $this-> nom = $nom;
        $this-> ingredients = $ingredients;
        $this-> etapes = $etapes;
    }
//getter
public function getId(){ return $this->id;}
public function getImage(){ return $this->image;}
public function getNom(){ return $this->nom;}
public function getIngredients(){ return $this->ingredients;}
public function getEtapes(){ return $this->etapes;}

//setter
public function setId($id){$this-> id = $id;}
public function setImage($image){$this-> image = $image;}
public function setNom($nom){$this-> nom = $nom;}
public function setIngredients($ingredients){$this-> ingredients = $ingredients;}
public function setEtapes($etapes){$this-> etapes = $etapes;}

}



?>