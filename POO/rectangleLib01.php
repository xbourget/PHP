<?php

    include_once "pointLib01.php";

    class Rectangle extends PointColor
    {
        protected int $cote;       // variable d'instance
    
        public function __construct( $x, $y, $cote, $c='blanc' ) 
        {
            parent::__construct( $x, $y, $c);
            $this->x = $x;
            $this ->y = $y; 
        }                   // d'instance

        public function __toString()
        {
            $pc = parent::__toString();
            return 'RECTANGLE'.$pc.', cote='.$this->cote;
        }        

        public function surface()
        {
            return $this->cote * $this->cote;
        }        
    }
?>
