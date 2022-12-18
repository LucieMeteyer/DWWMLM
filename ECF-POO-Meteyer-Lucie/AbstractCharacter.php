<?php
abstract class AbstractCharacter{


private int $ptsVie;
private int $force;

protected function __construct($ptsVie, $force)
{
    $this->ptsVie = $ptsVie;
    $this->force = $force;
   
}

//getter//

public function getPtsVie(){return $this->ptsVie;}
public function getForce(){return $this->force;}

//setter//

public function setPtsVie($ptsVie){$this->ptsVie = $ptsVie;}
public function setForce($force){$this->force = $force;}

//methodes//
 public function attack($ptsVie, $force, $player, $monstre){
    return "Vous attaquez le monstre !";
    $ptsVie = $ptsVie - $force;
    return "Il lui reste" . $monstre->getPtsVie() . "point de vie";

    if($player->getPtsVie()<= 0 || $monstre->getPtsVie()<= 0){
        return "Il est mort";

    }elseif($monstre->getPtsVie() > 0){
        return "Le monstre vous attaque !";
        $ptsVie = $ptsVie - $force;
        return "Il vous reste" . $player->getPtsVie() . "point de vie";
    }
}

}
?>