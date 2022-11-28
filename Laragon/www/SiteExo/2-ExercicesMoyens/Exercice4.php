<?php ob_start() ?>


<?php
$tab1 = ['Nom : ' => "Levi", 'Age : ' => 11, 'Type : ' => "Chien"];
$tab2 = ['Nom : ' => "Nuage", 'Age : ' => 4, 'Type : ' => "Chat"];
$tab3 = [
    array('Nom : ' => "Levi", 'Age : ' => 11, 'Type : ' => "Chien"),
    array('Nom : ' => "Nuage", 'Age : ' => 4, 'Type : ' => "Chat"),
];
$tabAnimaux =[
    array('Nom' => "Levi", 'Age' => 11, 'Type' => "Chien"),
    array('Nom' => "Nuage", 'Âge'=> 4, 'Type' => "Chat"),
];

echo affiche($tab1) . "<br>";
echo affiche($tab2) . "<br>";
echo affiche($tab3) . "<br>";
?>


<form action="" method="get">
    <center>
        <input type="submit" value=Animaux name=Animaux>
        <input type="submit" value=Chiens name=Chiens>
        <input type="submit" value=Chats name=Chats>
    </center>
</form>


<p>
    <?php
    if(isset ($get_["submit"]))
    echo $tab3;

    ?>
</p>

<?php
$content = ob_get_clean();
$titre = "Exercice 4";
require "../template.php"
?>