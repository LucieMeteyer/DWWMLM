<?php ob_start() ?>


<?php
$tab1 = ['Nom : ' => "Levi", 'Age : ' => 11, 'Type : ' => "Chien"];
$tab2 = ['Nom : ' => "Nuage", 'Age : ' => 4, 'Type : ' => "Chat"];
$tab3 = [
    array('Nom : ' => "Levi", 'Age : ' => 11, 'Type : ' => "Chien"),
    array('Nom : ' => "Nuage", 'Age : ' => 4, 'Type : ' => "Chat"),
];
?>


<form action="" method="get">
    <center>
        <input type="button" value=Animaux>
        <input type="button" value=Chiens>
        <input type="button" value=Chats>
    </center>
</form>

<?php
$content = ob_get_clean();
$titre = "Exercice 4";
require "../template.php"
?>