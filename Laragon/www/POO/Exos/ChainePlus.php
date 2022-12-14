<?php
class ChainePlus{
private string $chaine;


    
public function __construct($chaine)
{
    $this->chaine=$chaine;
}

//getter
public function getChaine(){ return $this->chaine;}

//setter

public function setProduit($chaine){$this->chaine = $chaine;}


public function gras(){
    return "<b> {$this->chaine} </b>" . "<br>";
}

public function italique(){
    return "<i> {$this->chaine} </i>" . "<br>";
}

public function souligne(){
    return  "<u> {$this->chaine} </u>" . "<br>";
}


public function majuscule(){
echo strtoupper($this->chaine) . "<br>";
}

}












?>