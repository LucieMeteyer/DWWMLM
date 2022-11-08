<?php
$tab=[1,2,3,4,5];
$somme=0;
for($i=0;$i<count($tab);$i++){
    $somme=$tab[$i]+$somme;
}
echo "La somme des valeurs fait " . $somme;
?>