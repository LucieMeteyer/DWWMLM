<?php ob_start() ?>



<?php

require "Fonctions.php";
class Livre
{

    private  $titre;
    private  $edition;
    private  $auteur;
    private  $dateDeParution;


    public function __toString()
    {
        $afficher = "<br>" . "Titre :" . $this->getTitre() . "<br>" . "Edition :" . $this->getEdition() . "<br>" . "Auteur :" . $this->getAuteur() . "<br>" . "Date de Parution :" . $this->getDateDeParution() . "<br>";
        echo "<br>" . "----------------------------------------------------------------------------" . "<br>";
        return $afficher;
    }


    public function __construct($titre, $edition, $auteur, $dateDeParution)
    {

        $this->titre = $titre;
        $this->edition = $edition;
        $this->auteur = $auteur;
        $this->dateDeParution = $dateDeParution;
    }

    //getter

    public function getTitre()
    {
        return $this->titre;
    }
    public function getEdition()
    {
        return $this->edition;
    }
    public function getAuteur()
    {
        return $this->auteur;
    }
    public function getDateDeParution()
    {
        return $this->dateDeParution;
    }


    //setter

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }
    public function setEdition($edition)
    {
        $this->edition = $edition;
    }
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }
    public function setDateDeParution($dateDeParution)
    {
        $this->dateDeParution = $dateDeParution;
    }

    public function afficher()
    {
        echo $this->__toString();
    }
}



$livre1 = new Livre(" Dragon Ball t.1 : Son Gokû et ses amis", "Glenat", "Akira Toriyama", 2010);
$livre2 = new Livre(" Dragon Ball t.2 : Les Dragon Balls sont en danger !", "Glenat", "Akira Toriyama", 2010);
$livre3 = new Livre(" Dragon Ball t.3 : Le début du Tenka Ichi Budôkai !!", "Glenat", "Akira Toriyama", 2010);
$livre4 = new Livre(" My Hero Academia t.1 : Izuku Midoriya : Les Origines", "Ki-Oon", "Kohei Horikoshi", 2016);
$livre5 = new Livre(" My Hero Academia t.2 : Déchaine toi, maudit nerd !", "Ki-Oon", "Kohei Horikoshi", 2016);
$livre6 = new Livre(" My Hero Academia t.3 : AllMight", "Ki-Oon", "Kohei Horikoshi", 2016);
$livres = [$livre1, $livre2, $livre3, $livre4, $livre5, $livre6];


foreach ($livres as $livre) {
    echo $livre->__toString();
}


?>

<center>
   
</center>

<?php


?>
<?php
$content = ob_get_clean();
$titre = "Exercice 7 :";
require "template.php"
?>