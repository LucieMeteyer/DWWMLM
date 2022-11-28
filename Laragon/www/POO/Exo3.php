<?php ob_start() ?>


<?php
class Employe
{
    public $nom;
    public $prenom;
    public $adresse;
    public $ville;
    public $numero;

    public function __construct($nom, $prenom, $adresse, $ville, $numero)
    {

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->numero = $numero;
        echo "Nom : " . $this->nom . "<br>" . "Prenom : " . $this->prenom . "<br>" . "Adresse : " . $this->adresse . "<br>" . " à " . $this->ville . " et son numéro de téléphone est : " . $this->numero. "<br>";
        echo "-----------------------------------------------------------------------------------" . "<br>";
        
    }

    public function afficher()
    {
        
    }
}

$employe1 = new Employe("Meteyer", "Lucie", "Résidence Orléans, Bat B, Apt 3, Allée de Fréjus", "St Pol sur Mer", "06-41-49-56-08");
$employe2 = new Employe("Palm", "Damien", "873 Boulevard Georges Pompidou", "Bray-Dunes", "06-37-02-06-30");
?>


<?php
$content = ob_get_clean();
$titre = "Exercice 3";
require "template.php"
?>