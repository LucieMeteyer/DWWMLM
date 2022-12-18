<?php
require_once "AbstractCharacter.php";
class Player extends AbstractCharacter
{

    private int $score;
    private string $pseudo;

    public function __construct($score, $pseudo, $ptsVie, $force)
    {
        $this->score = $score;
        $this->pseudo = $pseudo;
        AbstractCharacter::__construct($ptsVie, $force);
    }

    //getter//
    public function getScore()
    {
        return $this->score;
    }
    public function getPseudo()
    {
        return $this->pseudo;
    }
    //setter//

    public function setScore($score)
    {
        $this->score = $score;
    }
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }


    //methodes//
    public function move($direction)
    {

        
    }
}
