<?php
$tab=[];
$somme=0;
for($i=0;$i<9;$i++){
    $notes=readline("nombre ");
    $tab=$notes;
    $somme=$notes+$somme;
}
echo "La moyenne est " . $somme/9;
?>