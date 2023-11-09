<?php
    include_once "personnelM.php";

    class Enseignant extends Personnel
    {

        public function __toString() 
        {   
            return '(Enseignant)'.parent::__toString(); 
        }                   

        public function travailler()
        {
            // parent::travailler();
            print("j'enseigne");
        }

        public function remunerer()
        {   
            
            print("je gagne".$this->salaire."<br>");
        }

        

   }
?>
