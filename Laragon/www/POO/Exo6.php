<?php ob_start() ?>


<?php
class Personne
{
    private static $personnes = [];
    private  $nom;
    private $sexe;

    const HOMME = true;
    const FEMME = false;


    public function __construct($nom, $sexe)
    {
        $this->nom = $nom;
        $this->sexe = $sexe;
        self::$personnes[] = $this;
    }

    public function presentation()
    {
        echo "<b>Nom : </b>" . $this->nom . "<br/>" . "<b>Sexe : </b> ";
        if ($this->sexe) {
            echo "Homme <br/>";
        } else {
            echo "Femme <br/>";
        }
    }

    public static function getListPersonne()
    {
        return self::$personnes;
    }
}



$personne1 = new Personne("Lucie", Personne::FEMME);
$personne2 = new Personne("Damien", Personne::HOMME);

$recupPersonnes = Personne::getListPersonne();

foreach($recupPersonne as $value){
    $value->presentation();
    echo "<br/>------------------------------------<br/>";
}

foreach($recupArmes as $value){
    $value->presentation();
    echo "<br/>------------------------------------<br/>";
}

?>


<?php
$content = ob_get_clean();
$titre = "Exercice 6 : Constantes";
require "template.php"
?>