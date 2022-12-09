<?php
class Produit
{
    private string $numeroCommande;
    private string $listeLigneCommande;

    public function __construct($numeroCommande, $listeLigneCommande, )
    {
        $this->numeroCommande = $numeroCommande;
        $this->listeLigneCommande = $listeLigneCommande;

    }

    //getter
    public function getNumeroCommande(){ return $this->numeroCommande;}
    public function getListeLigneCommande(){return $this->listeLigneCommande;}

    //setter
    public function setNumeroCommande($numeroCommande){$this->numeroCommande = $numeroCommande;}
    public function setListeLigneCommande($listeLigneCommande){$this->listeLigneCommande = $listeLigneCommande;}

    public function __toString()
    {
        $afficher = "numeroCommande : " . $this->numeroCommande . "<br>" . "listeLigneCommande : " . $this->listeLigneCommande . "<br>";
        return $afficher;
    }

    public function afficher()
    {
        echo  $this->__toString();
    }
}
?>