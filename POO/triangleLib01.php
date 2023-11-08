<?php

    include_once "pointLib01.php";

    class Triangle extends PointColor
    {
        protected int $largeur;       // variable d'instance
        protected int $hauteur;       // variable d'instance
    
        public function __construct( $x, $y, $l, $h, $c='blanc' ) 
        {
            parent::__construct( $x, $y, $c);
            $this->largeur = $l;  // copie des variables 
            $this->hauteur = $h;  // dans les variables
        }                   // d'instance

        public function __toString()
        {
            $pc = parent::__toString();
            return 'TRIANGLE'.$pc.', largeur='.$this->largeur.', hauteur='.$this->hauteur;
        }        

        public function surface()
        {
            return $this->largeur * $this->hauteur / 2;
        }        
    }

?>
