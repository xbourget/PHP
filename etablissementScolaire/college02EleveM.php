<?php
    include_once "eleveM.php";
   

   $eleve1 = new Eleve('James', '5e');
   print($eleve1);
   print("<br>");
   $eleve1->travailler();
   $eleve1->remunerer();
   
?>
