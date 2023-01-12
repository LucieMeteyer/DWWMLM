<?php

define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));


require_once "controllers/personnages.controller.php";
$livreController = new PersonnagesController;

try {
    if (empty($_GET['page'])) {
        require "views/accueil.view.php";
    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);

        switch ($url[0]) {
            case "accueil":
                require "views/accueil.view.php";
                break;
            case "personnages":
                if (empty($url[1])) {
                    $personnagesController->afficherPersonnages();
                } else if ($url[1] === "l") {
                    $personnagesController->afficherPersonnage((int)$url[2]);
                } else if ($url[1] === "a") {
                    $personnagesController->ajoutPersonnage();
                } else if ($url[1] === "m") {
                    echo "modifier un personnage";
                } else if ($url[1] === "s") {
                    echo "suppression d'un personnage";
                } else{
                    throw new Exception("La page n'existe pas");
                }
                break;
                default : throw new Exception("La page n'existe pas");
        }
    }
} 
catch (Exception $e) {
    echo $e->getMessage();
}
