



<?php

    //------------------------------------------------------------------------------------------------------//
   //------------------------------------------------------------------------------------------------------//
  //////////////////////////////////////JE N'AI PAS REUSSI A LE TERMINER////////////////////////////////////
 //------------------------------------------------------------------------------------------------------//
//------------------------------------------------------------------------------------------------------//


//Appel des classes//
require "Player.php";
require "BanditManchot.php";
require "Monster.php";

//Saisie du pseudo//
$pseudo = readline("Entrez votre pseudo : ");

//Instancie un nouveau joueur avec ses attributs//
$player = new Player (0, $pseudo, 100, 20);

//Directions//
echo $choix =  "Saisir 0 pour quitter" . "\n" . " Saisir 1 pour aller au Nord" . "\n" . " Saisir 2 pour aller au Sud" . "\n" . " Saisir 3 pour aller à l'Est" . "\n" . " Saisir 4 pour aller à l'Ouest" . "\n" ;
$direction = readline("Choisissez une direction : ");
echo $player->move($direction);

switch ($direction) {
    case 0:
        break;

    case 1:
       $hasard=rand(1,6);
       if ($hasard == 1 or $hasard == 6){
        echo "Vous avez croisé le Bandit Manchot ! Il vous propose un tirage au sort mettant en jeu vos points de vie, vous avez 1 chance sur 2 de gagner." . "\n";
        $question = readline("Acceptez-vous ? (Oui/Non) : ");


        if ($question == "Oui" ){
            $banditManchot = new BanditManchot;
            echo $banditManchot->WinOrLose();
            echo $banditManchot->HowManyWeWinOrLose($banditManchot, $tirage2, $ptsVie, $choix, $score);
        }
        elseif($question == "Non" ){
            echo $choix;
            echo $direction= readline("Choisissez une direction : ");

        }


       }else{
            echo "Vous avez croisé un Monstre !";
            $monstre = new Monster(rand(20,100), rand(5,10));
            echo $player->attack($ptsVie, $force, $player, $monstre);
        }

       
    }
