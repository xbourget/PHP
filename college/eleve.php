<?php
    include_once "individus.php";

    class Eleve extends Individus
    {
        protected string $niveau;
        public function __construct( string $nom, string $niveau ) 
        {
            parent::__construct($nom);
            $this->niveau  = $niveau; 
            
        }          
        public function __toString() 
        {

            return '(Eleve'. $this->niveau.')'.parent::__toString();
        }         
        
        public function Travailler()
        {
            print ("j'étudie dans la classe de ".$this->niveau);
        }
   }
?>
