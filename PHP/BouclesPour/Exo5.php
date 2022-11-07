<?php
$nb1=readline("Entrez un premier nombre ");
$nb2=readline("Entrez un deuxième nombre ");
echo "1 : Additon \n 2 : Soustraction \n 3 : Multiplication \n 4 : Division \n";
$q=readline("Quelle opération voulez-vous faire ? \n ");

switch($q){
    case 1:
        echo $nb1+$nb2;
        break;

    case 2:
        echo  $nb1-$nb2;
        break;
    case 3:
        echo  $nb1*$nb2;
        break;
    
    case 4:
        echo $nb1/$nb2;
        break;
}
?>