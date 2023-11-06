<?php
   //calculer la moyenne de la longeur des mots de la liste
    
$liste = [ 'jean', 'dupont',  'sergent' , 'garcia', 'A',  'xavier', 'dupond', 'unMotQuiEstLong' ];

function moyenneMot ($liste)
{
$totallgrmot=0;
    for ($i=0; $i<count ($liste); $i++)
    {
    $mot=$liste[$i];
    $lenmot=strlen ($mot);
    $totallgrmot=$totallgrmot + $lenmot;
   // $totallgrmot=+ $lenmot
    print ("$mot $lenmot<br>"); //affiche la longeur de chaque mot
    }

$moyenne =$totallgrmot/count($liste);

print ("moyenne $moyenne <br>");
}

moyenneMot ($liste);
?>
