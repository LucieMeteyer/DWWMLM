<?php
class Maison
{
    private static $identifiant = 1;
    private $id;
    private $date;
    private $chambres;
    private $surface;

    public function __construct($date, $chambres, $surface)
    {
        $this->date = $date;
        $this->chambres = $chambres;
        $this->surface = $surface;
        $id = self::$identifiant++;
        $this->id = $id;
    }

    //getter

    public function getId()
    {
        return $this->id;
    }

    public function getDate()
    {
        return $this->date;
    }
    public function getChambres()
    {
        return $this->chambres;
    }
    public function getSurface()
    {
        return $this->surface;
    }

    public function presentation()
    {
        echo $this->id . "<br>";
        echo "<b>Date De Construction : </b>" . $this->date . "<br/>" . "<b>Nombre De Chambres : </b>" . $this->chambres . "<br/>" . "<b>Surface : </b>" . $this->surface;
    }
}
?>