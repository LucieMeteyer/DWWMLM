<?php
$tailleTab=readline("Combien de valeur voulez vous mettre ?");
$tab=[];

for($i=0;$i<$tailleTab;$i++){
$saisie=readline("Entrez un nombre ");
$tab[$i]=$saisie;
}
for($i=0;$i<$tailleTab;$i++){
    echo $tab[$i] . "\n";

}
?>