<?php
include "pointLib01.php";
class Triangle extends PointColor
{


    protected int $largeur;
    protected int $hauteur;

    public function __construct ($x, $y,$l,$h,$c='blanc')
    {
        parent::__construct($x,$y,$c);
        $this->largeur=$l;
        $this->hauteur=$l;
    }

public function__toString()
{
    $pc=parent::__toString();
    return 'TRIANGLE'.$pc.',largeur='.$this->largeur.', hauteur='.$this->hauteur.
}


}
?>