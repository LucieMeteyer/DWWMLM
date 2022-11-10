<?php
$min=0;
$tab=[5,2,3,4,1,9,8];
$save=0;

for($i=0; $i<count($tab)-1; $i++){
    $min=$i;
     for($j=$i+1; $j<count($tab); $j++){
        if($tab[$j]>$tab[$min]){
            $min=$j;
        }
     } 
     
    $save=$tab[$min];
    $tab[$min]=$tab[$i];
    $tab[$i]=$save;

     }

     foreach($tab as $value){
     echo $value . "\n";
}
?>