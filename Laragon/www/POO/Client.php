<?php
class Client
{
    private string $nom;
    private string $prenom;
    private string $numeroClient;

    public function __construct($nom, $prenom, $numeroClient)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numeroClient = $numeroClient;
    }

    //getter
    public function getNom(){ return $this->nom;}
    public function getPrenom(){return $this->prenom;}
    public function getNumeroClient(){ return $this->numeroClient;}

    //setter

    
    public function setNom($nom){$this->nom = $nom;}
    public function setPrenom($prenom){$this->prenom = $prenom;}
    public function setNumeroClient($numeroClient){$this->numeroClient = $numeroClient;}

    public function __toString()
    {
        $afficher = "nom : " . $this->nom . "<br>" . "prenom : " . $this->prenom . "<br>" . "Référence : " . $this->numeroClient . "<br>";
        return $afficher;
    }

    public function afficher()
    {
        echo  $this->__toString();
    }
}
?>