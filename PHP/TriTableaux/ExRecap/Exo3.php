<?php
//i = lignes
//j = colonnes
$saisie=readline("Choisisez un nombre de lignes : ");
$i = 1;
while ($i<=$saisie){
    for ($j=0; $j<$i; $j++){ //i = 5 : j = 0,1,2,3,4
        if($j+1){
            echo $i;
        }
        
        
    
    }
    echo "\n";
    $i++;
}


 

?>