<?php


function addition( $v1, $v2 )
{
    return $v1+$v2;
}

function somme( $liste )
{
    $total = 0;
    foreach( $liste as $note )
        $total = $total + $note;
    return $total;
}

function moyenne( $liste )
{
    //$moyenne = somme( $liste ) / sizeof($liste);

    return somme( $liste ) / sizeof($liste);
}

print( addition( 3, 5 ));
print( "<br>");


$notes = [    6, 4, 7, 4, 8, 9, 4, 0, 5, 5, 4, 5, 7, 5, 3, 2, 2, 1, 5, 5    ];

print( 'la some des notes :'.somme( $notes ) .'<br>' );

print( 'la moyenne des notes :'.moyenne( $notes )  );


?>