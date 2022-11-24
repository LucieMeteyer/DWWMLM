<?php ob_start() ?>

<form action="" method="post">
    <p>Chiffre : <input type="number" name="nb">
    <p>
    <p><input type="submit" value="Ok">
    <p>
</form>

<?php

$nb = $_POST['nb'];

if ($nb % 2 == 0) {
    echo $nb . " est pair" . "<br>";
} else {
    echo $nb . " est impair". "<br>";
}

?>

<?php
$content = ob_get_clean();
$titre = "Exercice 4";
require "../template.php"
?>