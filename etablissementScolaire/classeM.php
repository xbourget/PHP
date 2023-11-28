<?php
    include_once "individusM.php";

     class Classe   
    {
        protected string $name;       
          
        
        public function __construct( string $name ) 
        {
            $this->name  = $name; 
        }                   

        public function __toString() 
        {

            return $this->name.'<br>'; 
        }

        public function getName()
        {
            return $this->name;
        }

        
?>
