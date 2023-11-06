
<?php
   

$age= 120;
if ($age >= 3 && $age <=6 )
    print('maternelle<br>');
    
elseif($age > 6 && $age <=11)
    print('primaire<br>');
elseif ($age >11 && $age <=15) 
    print('college<br>');
elseif ($age>15 && $age<=18)
    print('lycee<br>');
elseif ($age>18 && $age<=99)
    print('permis<br>');
elseif ($age>99)
    print ('retraite<br>');
else
    print('erreur<br>');
?>