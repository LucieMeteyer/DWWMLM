<?php

$nb=readline("Entrer un nombre ");
if($nb>31){
    $prix=0.10*10+0.09*20+0.08*($nb-31);
}
elseif($nb>10){
    $prix=0.10**10+0.09*($nb-10);
}
else{$prix==0.10*($nb);
}

echo "Le prix est de " . $prix;


?>