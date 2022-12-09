<?php
class Cadre extends Employe
{
    private array $listeEmploye;

    public function __construct($nom, $prenom, $numSecu, $salaire, $job, $listeEmploye)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numSecu = $numSecu;
        $this->salaire = $salaire;
        $this->job = $job;
        $this->listeEmploye = $listeEmploye;
    }

    //getter

    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getNumSecu()
    {
        return $this->numSecu;
    }
    public function getSalaire()
    {
        return $this->salaire;
    }
    public function getJob()
    {
        return $this->job;
    }
    public function getListeEmploye()
    {
        return $this->listeEmploye;
    }

    //setter

    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setNumSecu($numSecu)
    {
        $this->numSecu = $numSecu;
    }
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }
    public function setJob($job)
    {
        $this->job = $job;
    }
    public function setListeEmploye($listeEmploye)
    {
        $this->listeEmploye = $listeEmploye;
    }

    public function __toString()
    {
        $afficher = "Nom : " . $this->nom . "<br>" . "Prenom : " . $this->prenom . "<br>" . "Numero de sécurite : " . $this->numSecu . "<br>" . "Salaire : " . $this->salaire . " 
        euros" . "<br>" . "Job : " . $this->job . "<br>";
        return $afficher;
    }

    public function afficher()
    {
        echo  $this->__toString();
    }

    public function SonJob()
    {
        if ($this->job == "soudeur") {
            echo "Le soudeur réalise des travaux d'assemblage, d'installation, de modification et de maintenance de réseaux de tuyauteries ou d'élèments chaudronnés." . "<br>" . "En fonction des soudures, il travaille au chalumeau, au laser..";
        } elseif ($this->job == "assistant mecanicien") {
            echo "L'aide mécanicien constitue le premier niveau dans l'emploi de mécanicien garagiste." . "<br>" . "courants selon les prescriptions du constructeur. Il effectue les réparations des circuits électriques simples concernant l'éclairage et la signalisation. en matière de sécurité, d'hygiène et d'environnement.";
        } elseif ($this->job == "magasinière") {
            echo "La magasinière réceptionne, stocke et prépare les produits destinés à être livrés à un client donné et stockés dans un magasin de l'entreprise (entrepôt, quai, local, chambre réfrigérée, etc.)." . "<br>" . "La magasinière prend également part au suivi et à l'inventaire des stocks.";
        } elseif ($this->job == "chef maintenance") {
            echo "Le chef maintenance veille à l'entretien des équipements." . "<br>" . "Le chef maintenance participe au dépannage lorsque c'est nécessaire mais aussi à la conception de nouvelles installations, ainsi qu'à leur organisation.";
        }
    }

    public function Manage(Employe $employe, Cadre $cadre)
    {
       echo "Managé par : " . $cadre->getPrenom() . " " . $cadre->getNom() . "<br>";
    }

    public function AugmenteUnSalarie(Employe $employe, $pourcentage){
        $augmentation = $employe->getSalaire() * (1+($pourcentage/100));
        echo $employe;
        echo "Salaire après augmentation : ";
        return $augmentation . "€";
    }
}
