<?php

for($a=-20; $a<40; $a= $a+5, print '<br>') // on peut mettre le saut de ligne ds la boucle
   { 
      if ($a <-10)
      {print ("$a on se les gèle<br>");
      }
  elseif($a < 0 )
      print('il fait très froid<br>');
  elseif ($a <10 ) 
      print('il fait froid<br>');
  elseif ($a<20)
      print('prends un pull<br>');
  elseif ($a<40)
      print('il fait chaud<br>');




   }

   

?>