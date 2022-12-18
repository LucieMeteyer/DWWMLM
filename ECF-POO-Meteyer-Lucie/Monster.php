<?php
require_once "AbstractCharacter.php";
class Monster extends AbstractCharacter{

    public function __construct($ptsVie, $force)
{
   AbstractCharacter::__construct($ptsVie, $force);
   
}
}
?>