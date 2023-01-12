<?php

abstract class Model{ //connection a la bdd
    private static $pdo;

    private static function setBdd(){
        self::$pdo = new PDO ("mysql:host=localhost;dbname=bibliotheque;charset=utf8","root","");//informations de connexion (chemin d'acces avec le nom,l'encodage, l'id et le pswd)
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);//Pour gérer les erreurs
    }

    protected function getBdd(){
        if(self::$pdo === null){ //creer la connection à la bdd
            self::setBdd();
        }
        return self::$pdo;
}

}
?>