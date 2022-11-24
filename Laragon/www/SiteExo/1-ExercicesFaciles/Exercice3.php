<?php ob_start() ?>

<form action="" method="get">
    <p>Pseudo : <input type="string" name="pseudo">
    <p>
    <p>Age : <input type="number" name="age">
    <p>
    <p><input type="submit" value="Valider">
    <p>
</form>

<?php
$pseudo = $_GET['pseudo'];
$age = $_GET['age'];

echo "Ton pseudo est " . $pseudo . " et tu as " . $age . " ans";
?>

<?php
$content = ob_get_clean();
$titre = "Exercice 3";
require "../template.php"
?>