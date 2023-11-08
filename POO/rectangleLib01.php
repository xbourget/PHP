<?php

    include_once "pointLib01.php";

    class Rectangle extends PointColor
    {
        protected int $cotex;       // variable d'instance
        protected int $cotey;       // variable d'instance
    
        public function __construct( $x, $y, $cx, $cy, $c='blanc' ) 
        {
            parent::__construct( $x, $y, $c);
            $this->cotex = $cx;  // copie des variables d'instance
            $this->cotey = $cy;  // copie des variables d'instance
        }                   

        public function __toString()
        {
            $pc = parent::__toString();
            return 'RECTANGLE'.$pc.', cotex='.$this->cotex.', coteY='.$this->cotey;
        }        

        public function surface()
        {
            return $this->cotex * $this->cotey;
        }        
    }
?>
