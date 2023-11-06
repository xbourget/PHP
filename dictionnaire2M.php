<?php

    $promo =
    [   
        
        'toto' => 
            [
                'age'   => 17,
                'poids' => 76,
                'ville' => 'Rouen',
                'permis' => 0
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
    
    // foreach ( $promo as $eleve => $data ) 
    // {
    //     print( "elève : $eleve :<br>");
    //     foreach ( $data as $key => $value) 
    //         print ( "----- $key => $value<br>");
    //     print( "-------------------<br>");
    // }
    // print( "-------------------<br>");

    $promo ['momo']['ville'] = 'Lille';
    $promo ['pipo']['loisir'] = ['musique', 'natation'];
    $promo ['toto']['musique'] = 'musette';
    $promo ['pipa'] = ['age'=>25, 'poids' => 60, 'ville' => 'Paris', 'permis' => true];
    unset($promo ['toto']['permis']);

   

    foreach ($promo as $eleve => $data) {
        print("élève : $eleve :<br>");
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                print("----- $key => ");
                print_r($value);
            } else {
                print("----- $key => $value<br>");
            }
        }
        print("-------------------<br>");
    }

    $json = json_encode( $promo );
    print( '<br>'.$json.'<br>' );
?>