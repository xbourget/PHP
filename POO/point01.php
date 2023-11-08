<?php
    class Point
    {
        protected int $x;       // variable d'instance
        protected int $y;       // variable d'instance
    
        public function __construct( $x, $y ) 
        {
            $this->x = $x;  // copie des variables 
            $this->y = $y;  // dans les variables
        }                   // d'instance

        public function show()  // la méthode show retourne, ici, les coordonnées ds le plan
        {
            print( '('.$this->x.', '.$this->y.')' );
        }
    }

    // instanciation d'un Point
    $p1 = new Point(4, 5);
    $p1->show();
?>
