<?php
require_once "models/recetteManager.class.php";

class recettesController
{
    private $recetteManager;


    public function __construct()
    {
        $this->recetteManager = new RecetteManager;
        $this->recetteManager->chargementRecettes();
    }

    public function afficherRecettes()
    {
        $recettes = $this->recetteManager->getRecettes();
        require "views/recettes.view.php";
    }

    public function afficherRecette($id)
    {
        $recette = $this->recetteManager->getRecetteById($id);
        require "views/afficherRecette.view.php";
    }

    public function ajoutRecette()
    {
        require "views/ajoutRecette.view.php";
    }

    public function ajoutRecetteValidation()
    {
        $file = $_FILES['image'];
        $repertoire = "public/images/";
        $nomImageAjoute = $this->ajoutImage($file, $repertoire);
        $this->recetteManager->ajoutRecetteBd($_POST['nom'], $_POST['Ingredients'], $nomImageAjoute, $_POST['Etapes']);
        header('Location: ' . URL . "recettes");
    }

    public function suppressionRecette($id)
    {
        $nomImage = $this->recetteManager->getRecetteById($id)->getImage();
        unlink("public/images/" . $nomImage);
        $this->recetteManager->suppressionRecetteBd($id);
        header('Location:' . URL . "recettes");
    }

    private function ajoutImage($file, $dir)
    {
        if (!isset($file['name']) || empty($file['name']))
            throw new Exception("Vous devez indiquer une image");

        if (!file_exists($dir)) mkdir($dir, 0777); //c'est un droit, si le dossier images n'existe pas, il va le créer

        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION)); // png,jpg etc...
        $random = rand(0, 99999); //eviter les doublons et l ecrasement des images
        $targetfile = $dir . $random . "" . $file['name']; //création et placement du fichier avec un num random

        if (!getimagesize($file["tmp_name"]))                       // vérifie si c'est une image
            throw new Exception("Le fichier n'est pas une image"); //

        if ($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif") // vérifie si c'est la bonne extension
            throw new Exception("L'extension du fichier n'est pas reconnu");                             //

        if (file_exists($targetfile))                       // vérifie si il y a pas de doublons
            throw new Exception("Le fichier existe déjà"); //

        if ($file['size'] > 500000)                           // vérifie la poids de la photo       
            throw new Exception("Le fichier est trop gros"); //

        if (!move_uploaded_file($file['tmp_name'], $targetfile))
            throw new Exception("l'ajout de l'image n'a pas fonctionné");
        else return ($random . "" . $file['name']);
    }

    public function modificationRecette($id){
        $recette= $this->recetteManager->getRecetteById($id);
        require "views/modifierRecette.view.php";
    }


    public function modificationRecetteValidation()
    {
        $imageActuelle = $this->recetteManager->getRecetteById((int)$_POST['identifiant'])->getImage();
        $file = $_FILES['image'];
        if ($file['size'] > 0) {
            unlink("public/images/" . $imageActuelle);
            $repertoire = "public/images/";
            $nomImageAjoute = $this->ajoutRecette($file, $repertoire);
        } else {
            $nomImageAjoute = $imageActuelle;
        }
        
        $this->recetteManager->modificationRecetteBd((int)$_POST['identifiant'], $_POST['titre'], $_POST['ingredients'], $nomImageAjoute, $_POST['etapes']);
        header('Location: ' . URL . "recettes");
    }


    
}