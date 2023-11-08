<?php

    include_once "pointLib01.php";

    class Rectangle extends PointColor
    {
        protected int $Largeur;   // variable d'instance
        protected int $Largeur;   // variable d'instance
    
        public function __construct( $x, $y, $l, $L='blanc' ) 
        {
            parent::__construct( $x, $y, $c);
            $this->cote = $cote;  // copie des variables 
        }   $               // d'instance

        public function __toString()
        {
            $pc = parent::__toString();
            return 'CARRÉ'.$pc.', cote='.$this->cote;
        }        

        public function surface()
        {
            return $this->cote * $this->cote;
        }        
    }
?>
