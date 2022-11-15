<?php

$chomage = array("Autriche : " =>4.9, "Allemagne : " =>9.3 ,"Danemark : " =>4.8 , "Espagne : " =>9.4 , "France : " =>9.7);
$min=0;

echo "***********Exo1-1***********" . "\n";

foreach($chomage as $key =>$value){
    echo  $key . $value . "\n";
}

echo "***********Exo1-2***********" . "\n";

foreach($chomage as $key =>$value){
    if($value<=5){
        echo $key . $value . "\n";
    }
        
}

echo "***********Exo1-3***********" . "\n";

$chomage = array("Autriche" => 4.9 , "Allemagne" =>9.3 , "Danemark" => 4.8 , "Espagne" =>9.4 , "France" =>9.7);
$min = 100;


foreach ($chomage as $pays => $value){
    if ($value < $min){
        $min = $value;
        $paysMin = $pays;
}

}echo "Le pays ayant le taux de chômage le plus faible est : " . $paysMin . $min ."\n";
?>
?>