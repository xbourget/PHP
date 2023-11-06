<?php
    $totoD = 
    [
        'age'   => 17,
        'poids' => 76,
        'ville' => 'Rouen',
        'loisir' => 'tricot',
        'sport' => 'natation'
    ];
    
    $totoL = 
    [
        0   => 17,
        1 => 76,
        2 => 'Rouen'
    ];
    



    foreach ( $totoD as $key => $value) 
        print ( "$key => $value<br>");
    foreach ( $totoL     as $key => $value) 
        print ( "$key => $value<br>");
?>




