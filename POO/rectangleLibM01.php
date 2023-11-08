<?php

    include_once "pointLib01.php";

    class Rectangle extends PointColor
    {
        protected int $largeur;
        protected int $hauteur;       // variable d'instance
    
        public function __construct( $x, $y, $largeur, $hauteur, $c='blanc' ) 
        {
            parent::__construct( $x, $y, $c);
            $this->largeur = $largeur;
            $this->hauteur = $hauteur;  // copie des variables 
        }                   // d'instance

        public function __toString()
        {
            $pc = parent::__toString();
            return 'Rectangle'.$pc.', largeur='.$this->largeur. ' '. 'hauteur=' . $this->hauteur;
        }        

        public function surface()
        {
            return $this->largeur * $this->hauteur;
        }
        
        public function perimetre()
        {
            return ($this->largeur + $this->hauteur)*2;
        }   
    }

?>
