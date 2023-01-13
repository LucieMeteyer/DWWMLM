<?php
require_once "models/livreManager.class.php";

class LivresController{
    private $livreManager;
  

    public function __construct(){
        $this->livreManager = new LivreManager;
        $this->livreManager->chargementLivres();
    }

    public function afficherLivres(){
        $livres=$this->livreManager->getLivres();
        require "views/livres.view.php";
        
    }

    public function afficherLivre($id){
       $livre = $this->livreManager->getLivreById($id);
       require "views/afficherLivre.view.php";
    }

    public function ajoutLivre(){
        require "views/ajoutLivre.view.php";
    }

    public function ajoutLivreValidation(){
        $file = $_FILES['image'];
        $repertoire = "public/images/";
        $nomImageAjoute=$this->ajoutImage($file, $repertoire);
        $this->livreManager->ajoutLivreBd($_POST['titre'], $_POST['nbPages'], $nomImageAjoute);
        header('Location : '. URL . "livres");
    }

    public function suppressionLivre($id){
        $nomImage = $this->livreManager->getLivreById($id)->getImage();
        unlink("public/images/" . $nomImage);
        $this->livreManager->suppressionLivreBd($id);
        header('Location :' . URL . "livres");
    }

    private function ajoutImage($file, $dir){
        if(!isset($file['name']) || empty($file['name']))
            throw new Exception("Vous devez indiquer une image");

        if(!file_exists($dir)) mkdir($dir,0777); //c'est un droit, si le dossier images n'existe pas, il va le créer

        $extension = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION)); // png,jpg etc...
        $random = rand(0,99999); //eviter les doublons et l ecrasement des images
        $targetfile = $dir.$random."".$file['name']; //création et placement du fichier avec un num random

        if(!getimagesize($file["tmp_name"]))                       // vérifie si c'est une image
            throw new Exception("Le fichier n'est pas une image");//
                                                  
        if($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif") // vérifie si c'est la bonne extension
            throw new Exception("L'extension du fichier n'est pas reconnu");                             //
                                    
        if(file_exists($targetfile))                       // vérifie si il y a pas de doublons
            throw new Exception("Le fichier existe déjà");//
                                 
        if($file['size'] > 500000)                           // vérifie la poids de la photo       
            throw new Exception("Le fichier est trop gros");//

        if(!move_uploaded_file($file['tmp_name'], $targetfile))
            throw new Exception("l'ajout de l'image n'a pas fonctionné");
        else return ($random."".$file['name']);
    }
}







?>