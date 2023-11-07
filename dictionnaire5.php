<?php
    $formation =
    [
        'Abdallah' => 
            [
                'age'   => 30,
                'poids' => 70,
                'ville' => 'Rouen',
                'permis' => true,
                'jeux video' => 'cs2'
            ],

        'Robin' => 
            [
                'age'   => 38,
                'poids' => 80,
                'ville' => 'paris',
                'permis' => true,
                'sport' => ['natation', 'jeux video']
            ],

        'Linda' => 
            [
                'age'   => 28,
                'poids' => 60,
                'ville' => 'Havre',
                'permis' => false,
                'loisirs' => 'cuisine'
            ],

        'Nora' => 
            [
                'age'   => 29,
                'poids' => 63,
                'ville' => 'Elbuf',
                'permis' => TRUE,
                'loisirs' => 'jardinage'
            ]
    ];


    foreach ( $formation as $eleve => $data ) 
    {
        print( "elève : $eleve :<br>");
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
?>