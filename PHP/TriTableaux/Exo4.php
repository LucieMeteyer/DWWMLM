<?php
$dico = ["divin","dominant","lumiere","mâle"];
$saisie=readline("Entrez un mot : ");
$entree=false;
for($i=0;$i< count ($dico); $i++){
    if($dico[$i] == $saisie){
    echo "Le mot est bien dans le dictionnaire";
    $entree=true;
}       
}
if($entree== false){
    echo "Le mot n'est pas dans le dictionnaire";
}


 


?>