<?php
    $age    = 15;
    $permis = true;

    if ( $age < 18 )
        $permis = false;

    if ( $age >= 18 && $permis ) 
        print( "tu peux conduire une voiture" );
    elseif ( $age < 5 )
        print( "tu es à la maternelle");
    else
        print( "tu prends le bus" );
?>