<?php
Class Personnage {
    private $id;
    private $prenom;
    private $nom;
    private $age;
    private $specialite;
    private $image;


    public function __construct ($id,$prenom,$nom,$age,$specialite,$image)
    {
        $this-> id = $id;
        $this-> prenom = $prenom;
        $this-> nom = $nom;
        $this-> age = $age;
        $this-> specialite = $specialite;
        $this-> image = $image;
    }
//getter
public function getId(){ return $this->id;}
public function getPrenom(){ return $this->prenom;}
public function getNom(){ return $this->nom;}
public function getAge(){ return $this->age;}
public function getSpecialite(){ return $this->specialite;}
public function getImage(){ return $this->image;}

//setter
public function setId($id){$this-> id = $id;}
public function setPrenom($prenom){$this-> prenom = $prenom;}
public function setNom($nom){$this-> nom = $nom;}
public function setAge($age){$this-> age = $age;}
public function setSpecialite($specialite){$this-> specialite = $specialite;}
public function setImage($image){$this-> image = $image;}

}



?>