<?php
    include_once "personnel.php";

    class Enseignant extends Personnel
    {
        
        public function __toString() 
        {
            return '(Enseignant)'.parent::__toString(); 
        }  
        
        public function travailler()
        {
            //parent::travailler();
            print( "j'enseigne...<br>");
        }
   }
?>
