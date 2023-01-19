<?php

define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));


require_once "controllers/recettes.controller.php";
$recetteController = new RecettesController;
try {
    if (empty($_GET['page'])) {
        require "views/accueil.view.php";
    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);

        switch ($url[0]) {
            case "accueil":
                require "views/accueil.view.php";
                break;
            case "recettes":
                if (empty($url[1])) {
                    $recetteController->afficherRecettes();
                } elseif ($url[1] === "r") {
                    $recetteController->afficherRecette((int)$url[2]);
                } elseif ($url[1] === "a") {
                    $recetteController->ajoutRecette();
                } elseif ($url[1] === "m") {
                    $recetteController->modificationRecette((int)$url[2]);
                } elseif ($url[1] === "s") {
                    $recetteController->suppressionRecette((int)$url[2]);
                } elseif ($url[1] === "av") {
                    $recetteController->ajoutRecetteValidation();
                } elseif ($url[1] === "mv") {
                    $recetteController->modificationRecetteValidation();
                } else {
                    throw new Exception("La page n'existe pas");
                }
                break;
            default:
                throw new Exception("La page n'existe pas");
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>



