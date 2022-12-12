<?php
class Produit
{
    private string $libelle;
    private string $description;
    private float $reference;
   private float $prixUnitaireTTC;

    public function __construct($libelle, $description, $reference, $prixUnitaireTTC)
    {
        $this->libelle = $libelle;
        $this->description = $description;
        
        $this->reference = $reference;
        $this->prixUnitaireTTC = $prixUnitaireTTC;
    }

    //getter
    public function getLibelle(){ return $this->libelle;}
    public function getDescription(){return $this->description;}
    public function getReference(){ return $this->reference;}
    public function getPrixUnitaireTTC() {return $this->prixUnitaireTTC;}

    //setter

    
    public function setLibelle($libelle){$this->libelle = $libelle;}
    public function setDescription($description){$this->description = $description;}
    public function setReference($reference){$this->reference = $reference;}
    public function setPrixUnitaireTTC($prixUnitaireTTC){$this->prixUnitaireTTC = $prixUnitaireTTC;}

    public function __toString()
    {
        $afficher = "Libelle : " . $this->libelle . "<br>" . "Description : " . $this->description . "<br>" . "Référence : " . $this->reference . "<br>" . "Prix Unitaire TTC : " . $this->prixUnitaireTTC . " euros" . "<br>";
        return $afficher;
    }

    public function afficher()
    {
        echo  $this->__toString();
    }
}
?>