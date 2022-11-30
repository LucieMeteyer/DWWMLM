<?php ob_start() ?>


<?php
class Personne
{

    private  $nom;
    private $sexe;

    const HOMME = true;
    const FEMME = false;


    public function __construct($nom, $sexe)
    {

        $this->nom = $nom;
        $this->sexe = $sexe;
    }

    //getter

    public function getNom()
    {
        return $this->nom;
    }

    public function getSexe()
    {
        return $this->sexe;
    }


    //setter

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }



    public function afficher()
    {
    }
}



$personne1 = new Personne("Lucie", Personne::FEMME);
$personne2 = new Personne("Damien", Personne::HOMME);
$personnes = [$personne1, $personne2];
?>



<p>
    <?php


    foreach ($personnes as $personne) {

        if ($personne->getSexe() === true) {
            $sexe = "homme";
        } else {
            $sexe = "femme";
        }
        echo $personne->getNom() . " est un(e) " . $sexe . "<br>";
    }

    ?>
</p>

<?php
$content = ob_get_clean();
$titre = "Exercice 6 : Constantes";
require "template.php"
?>