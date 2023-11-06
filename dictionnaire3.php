<?php
    $toto = [   'age'   => 17,
                'poids' => 76,
                'ville' => 'Rouen'   ];
    
    $key    = array_keys( $toto );
    $values = array_values( $toto );
    $dict2  = array_combine( $key, $values );
    print_r( $dict2 );
?>




