<?php ob_start() ?>


<?php
class Stagiaire
{

    private  $nom;
    private $notes;


    public function __construct($nom, $notes)
    {

        $this->nom = $nom;
        $this->notes = $notes;
    }

    //getter

    public function getNom()
    {
        return $this->nom;
    }
    public function getNotes()
    {
        return $this->notes;
    }


    //setter

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setNotes($notes)
    {
        $this->notes = $notes;
    }




    public function afficher()
    {
    }
}



$stagiaire1 = new Stagiaire("Lucie", [15, 18, 20, 12]);
$stagiaire2 = new Stagiaire("Damien", [16, 19, 20, 13]);
$stagiaire3 = new Stagiaire("Manon", [14, 17, 19, 11]);
$stagiaire4 = new Stagiaire("Fred", [13, 16, 18, 10]);
$stagiaires = [$stagiaire1, $stagiaire2, $stagiaire3, $stagiaire4];
?>



<p>
    <?php

    require "Fonctions.php";

    foreach ($stagiaires as $stagiaire) {

        echo $stagiaire->getNom() . " : ";
        foreach ($stagiaire->getNotes() as $value) {
            echo $value  . " , ";
        }
        echo "<br>" . "La moyenne du stagiaire est de : ";
        echo calculerMoyenne($stagiaire->getNotes()) . "<br>";
        echo "Sa note le plus haute est : " . max($stagiaire->getNotes()) . "<br>";
        echo "Sa note la plus basse est : " . min($stagiaire->getNotes()) . "<br>";
        echo "--------------------------  " . "<br>";
    }
    ?>
</p>

<?php
$content = ob_get_clean();
$titre = "Exercice 5";
require "template.php"
?>