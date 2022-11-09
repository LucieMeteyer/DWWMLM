<?php
$tab=[5,2,3,4,1,9,8];
$estvrai=true;

while($estvrai){
    
    for ($i=0;$i<=count($tab)-2;$i++){
        if ($tab[$i]>$tab[$i+1]){
            $temp=$tab[$i];
            $tab[$i]=$tab[$i+1];
            $tab[$i+1]=$temp;
            $estvrai=true;
        }
    }
    $estvrai=false;
}

for ($i=0;$i<count($tab);$i++){
    echo($tab[$i]."\n");
}
?>