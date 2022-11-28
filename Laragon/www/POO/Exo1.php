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

    public  $nom;
    public $age;
    public $type;

    public function __construct($nom, $age, $type)
    {

        $this->nom = $nom;
        $this->age = $age;
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
            if($animal->type=="chien"){
                echo "Je m'appelle " .  $animal->nom . " j'ai " .  $animal->age . " ans et je suis un chien";
            }
          
        }
    }
    if (isset($_GET["Chats"])) {
        foreach ($animaux as $animal) {
            if($animal->type=="chat"){
                echo "Je m'appelle " .  $animal->nom . " j'ai " .  $animal->age . " ans et je suis un chat";
            }
          
        }
    }

    if (isset($_GET["Animaux"])) {
        foreach ($animaux as $animal) {
            if($animal->type){
                echo "Je m'appelle " .  $animal->nom . " j'ai " .  $animal->age .  " ans et je suis un " . $animal->type . "<br>";
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