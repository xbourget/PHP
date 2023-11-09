<?php
    include_once "personnel.php";

    class Enseignant extends Personnel
    {
        
                   
        public function __toString() 
        {

            return '(Enseignant)'.parent::__toString();
        }        
        
        public function Travailler()
        {
            //parent::travailler();
            print ("j'enseigne");
        }
        public function remunerer()
        {
            print ("je gagne ".$this->salaire."");
        }
    }
?>
