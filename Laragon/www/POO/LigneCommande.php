<?php
class LigneCommande
{
    private string $produit;
    private int $qte;
  

    public function __construct($produit, $qte)
    {
        $this->produit;
        $this->qte = $qte;
    }

    //getter
    public function getProduit(){ return $this->produit;}
    public function getqte(){return $this->qte;}

    //setter

    
    public function setProduit($produit){$this->produit = $produit;}
    public function setqte($qte){$this->qte = $qte;}

    public function __toString()
    {
        $afficher = "produit : " . $this->produit . "<br>" . "Quantité : " . $this->qte . "<br>";
    }

    public function afficher()
    {
        echo  $this->__toString();
    }
}
?>
