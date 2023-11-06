<?php

    $promo =
    [
        'toto' => 
            [
                'age'   => 17,
                'poids' => 76,
                'ville' => 'Rouen',
                'permis' => 0,
                'musique' => 'jazz'
            ],

        'momo' => 
            [
                'age'   => 30,
                'poids' => 88,
                'ville' => 'Rouen',
                'permis' => true
            ],

        'pipo' => 
            [
                'age'   => 22,
                'poids' => 91,
                'ville' => 'Havre',
                'permis' => true
            ]
    ];

    $promo['riri'] = [
        'age'   => 16,
        'poids' => 30,
        'ville' => 'Donaldville',
        'permis' => true,
        'musique' => 'coin coin'
    ];

    $promo['fifi'] = [
        'age'   => 16,
        'poids' => 31,
        'ville' => 'Donaldville',
        'permis' => false,
        'musique' => 'pouet pouet'
    ];

    $promo['loulou'] = [
        'age'   => 16,
        'poids' => 29,
        'ville' => 'Donaldville',
        'permis' => false,
        'musique' => 'tut tut'
    ];

    unset($promo['pipo']);
    
    foreach ( $promo as $eleve => $data ) 
    {
        print( "elève : $eleve :<br>");
        foreach ( $data as $key => $value) 
            print ( "----- $key => $value<br>");
        print( "-------------------<br>");
    }
?>