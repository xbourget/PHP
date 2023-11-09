<?php
    include_once "Individus.php";

    abstract class Personnel extends Individus
    {
        protected int $salaire;
        
        public function __construct(string $n, int $s ) 
        {
           parent::__construct($n); 
           $this->salaire =$s;
            
        }                
                   
        public function Travailler()
        {
            print ('je travaille dans le collège');
        }
  abstract public function remunerer();
   
    }

?>
