<?php ob_start() ?>


<form action="" method="get">
    <center>
        <input type="submit" value=Animaux name=Animaux>
        <input type="submit" value=Chiens name=Chiens>
        <input type="submit" value=Chats name=Chats>
    </center>
</form>


<?php
class Animal
{

    private  $nom;
    private $age;
    private $type;

    public function __construct($nom, $age, $type)
    {

        $this->nom = $nom;
        $this->age = $age;
        $this->type = $type;
    }

    //getter

    public function getNom()
    {
        return $this->nom;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getType()
    {
        return $this->type;
    }

    //setter

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

   

    public function afficher()
    {
        echo "Je m'appelle   $this->nom j'ai  $this->age   ans et je suis un   $this->type" . "<br/>";
    }
}



$animal1 = new Animal("Levi", 6, "chien");
$animal2 = new Animal("Nuage", 4, "chat");
$animaux = [$animal1, $animal2];
?>


<p>
    <?php
    if (isset($_GET["Chiens"])) {
        foreach ($animaux as $animal) {
            if ($type=$animal->getType()=="chien") {
                echo "Je m'appelle " .  $animal->getNom() . " j'ai " .  $animal->getAge(). " ans et je suis un " . $animal->getType() .  "<br>";
            }
        }
    }
    if (isset($_GET["Chats"])) {
        foreach ($animaux as $animal) {
            if ($type=$animal->getType()=="chat") {
                echo "Je m'appelle " .  $animal->getNom() . " j'ai " .  $animal->getAge() . " ans et je suis un " . $animal->getType() . "<br>";
            }
        }
    }

    if (isset($_GET["Animaux"])) {
        foreach ($animaux as $animal) {
            if ($type=$animal->getType()) {
                echo "Je m'appelle " .  $animal->getNom( ). " j'ai " .  $animal->getAge() .  " ans et je suis un " . $animal->getType() . "<br>";
            }
        }
    }

    ?>
</p>


<?php
$content = ob_get_clean();
$titre = "Exercice 1";
require "template.php"
?>