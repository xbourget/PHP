<?php
    include_once "Personnel.php";

    class Surveillant extends Personnel
    {
        
            
                   
        public function __toString() 
        {

            return '(Surveillant)'.parent::__toString();
        }        
        
        public function Travailler()
        {
            print ("je surveille");
        }
        public function remunerer()
        {
            print ("je gagne 11");
        }
    }
?>
