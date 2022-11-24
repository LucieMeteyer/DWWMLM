<?php

function affiche($tab)
{
    foreach ($tab as $key => $value) {
        echo $key . $value . "<br>";
        return;
    }
}

//***********************************//

function afficherTableau($tab)
{
    foreach ($tab as $value) {
        echo $value . "<br>";
    }
}


//***********************************//

function calculerMoyenne($tab)
{
    echo "La moyenne est " . array_sum($tab) / count($tab);
}

//***********************************//

function estTableauPair($tab)
{
    for ($i = 0; $i < count($tab); $i++) {
        $pair = $tab[$i] % 2;
    }
    if ($pair == 0) {
        echo "Le tableau contient que des nombres pairs";
    } 
    else {
        echo "Le tableau ne contient pas que des nombres pairs";
    }
}
