<?php

$familledafonte =
    [
        'maman' => 
            [
                'age'   => 43,
                'poids' => 72,
                'ville' => 'perriers sur andelle',
                'permis' => true
            ],

        'rui' => 
            [
                'age'   => 11,
                'poids' => 36,
                'ville' => 'perriers sur andelle',
                'permis' => false,
                'sport' => 'foot'
            ],

        'leonardo' => 
            [
                'age'   => 9,
                'poids' => 30,
                'ville' => 'perriers sur andelle',
                'permis' => false,
                'loisirs' => ['dessin', 'basket' ]
            ]
    ];
    
    unset( $familledafonte[ 'maman' ][ 'poids' ] );


    foreach ( $familledafonte as $personne => $data ) 
    {
        print( "personne : $personne :<br>");
        foreach ( $data as $key => $value) 
        {
            if ( gettype( $value ) == 'array'  )
            {
                print ( "----- $key => ");
                print_r( $value );
                print ( "<br>");
            }

            else
                print ( "----- $key => $value<br>");
        }
        print( "-------------------<br>");
    }

    print( $familledafonte[ 'rui' ][ 'sport']  );
?>
  