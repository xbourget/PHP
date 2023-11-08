<?php

    include_once "pointLib01.php";

    class Rectangle extends PointColor
    {
        protected int $largeur; 
        protected int $hauteur;      // variable d'instance
    
        public function __construct( $x, $y, $l, $h, $c='blanc' ) 
        {
            parent::__construct( $x, $y, $c);
            $this->largeur = $l;
            $this->hauteur=$h;  
        }
        public function __toString()
        {
            $rec = parent::__toString();
            return 'RECTANGLE'.$rec.', largeur='.$this->largeur.', hauteur='.$this->hauteur;
        }        

        public function surface()
        {
            return $this->largeur * $this->hauteur/2;
        }        
       
    }

?>