<?php

    include_once "pointLib01.php";

    class Rectangle extends PointColor
    {
        protected int $cote;       // variable d'instance
    
        public function __construct( $x, $y, $cote, $c='blanc' ) 
        {
            parent::__construct( $x, $y, $c);
            $this->cote = $cote;  // copie des variables 
        }                   // d'instance

        public function __toString()
        {
            $pc = parent::__toString();
            return 'RECTANGLE'.$pc.', largeur='.$this->largeur.' ,longueur='.$this->longueur;
        }        

        public function surface()
        {
            return $this->largeur * $this->longueur;
        }        
    }
?>
