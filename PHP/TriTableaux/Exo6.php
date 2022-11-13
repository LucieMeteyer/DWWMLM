<?php
$tab1=[5,2,3,4,1,9,8];
$tab2=[10,20,30,40,50,60,70];
$tab3=[];
$entree=true;
$tab3=array_merge($tab1,$tab2);

while($entree){

    $entree=false;
    for($i=0;$i<count($tab3)-2;$i++){
        if($tab3[$i] > $tab3[$i+1]){
        $temp = $tab3[$i];
        $tab3[$i] = $tab3[$i+1];
        $tab3[$i+1] = $temp;
        $entree = true;
        }
    }
}
    foreach($tab3 as $value){
        echo $value . "\n";
    }
?>