<?php

class BanditManchot{

    //methodes//
    public function WinOrLose(){
        return "Le bandit Manchot procède au tirage au sort !" . "\n";
        $tirage1 = rand(1, 2);
        if($tirage1 == 1){
            return "Vous perdez des points de vie !" . "\n" . "Le bandit Manchot procède au second tirage au sort pour déterminer combien de points de vie vous perdez." . "\n" . "Vous pouvez perdre entre 1 et 10 points de vie.";
        }
        else{
            return "Vous gagner des points de vie !" . "\n" . "Le bandit Manchot procède au second tirage au sort pour déterminer combien de points de vie vous gagnez." . "\n" . "Vous pouvez gagner entre 1 et 10 points de vie.";
        }
       
    }

    public function HowManyWeWinOrLose($banditManchot, $tirage2, $ptsVie, $choix, $score){
        $tirage2 = rand(1, 10);
        if ($banditManchot->WinOrLose()){
            $ptsVie = $ptsVie - $tirage2;
            return "Vous avez $ptsVie de points de vie." . "\n";
        }else{
            $ptsVie = $ptsVie + $tirage2;
            return "Vous avez $ptsVie de points de vie.";
        }


            if($banditManchot->WinOrLose() <= 0){
                return "Vous êtes mort.";
            }else{
                echo "Vous êtes vivant, voulez vous continuer votre chemin ? (Oui/Non) : ";

                
                if("Oui"){
                    echo $choix;
                }elseif("Non"){
                    echo "Votre score est de $score";
                }
            }
           
        


    }

}
?>