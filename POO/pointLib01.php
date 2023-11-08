<?php
    class Point
    {
        
        protected int $x;       // variable d'instance
        protected int $y;       // variable d'instance
    
        public function __construct( $x, $y ) 
        {
            $this->x = $x;  // copie des variables 
            $this->y = $y;  // dans les variables instance
        }

        public function __toString()
        {
            return '('.$this->x.', '.$this->y.')';
        }        

        public function show()  // la méthode show 
        {
            print( '('.$this->x.', '.$this->y.')' );
        }
    }

    class PointColor extends Point
    {
        public string $color;

        public function __construct( int $x, int $y, string $c  )
        {
            parent::__construct( $x, $y );
            $this->color = $c;
        }

        public function __toString()
        {
            $p = parent::__toString() ;
            return '['.$p.', '.$this->color.']' ;
        }        

        public function show()
        {
            parent::show();
            print( $this->color.'<br>');
        }        

    }
?>
