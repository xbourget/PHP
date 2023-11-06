<?php
   
    
$liste = [ 'jean', 'dupont',  'sergent' , 'garcia', 'A',  'xavier', 'dupond', 'unMotQuiEstLong' ];

$nbrMot = count($liste);
$longueurM=0;
foreach($liste as $mot)
{ $longueurM += mb_strlen($mot, 'utf8');

}
$moyenne = $longueurM / $nbrMot;
    echo "La moyenne de longueur des mots est : " . $moyenne;
?>
