<?php

    $promo =
    [
        'toto' => 
            [
                'age'   => 17,
                'poids' => 76,
                'ville' => 'Rouen',
                'permis' => 0,
                'musique' => 'rock'
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
                'permis' => true,
                "loisirs" => ['cuisine', 'foot','couture']
            ]
    ];
    $promo ['momo']['cuisine']= 'hareng'; //ajoute cuisine = hareng à momo
    unset ($promo ['momo']['cuisine']); // enleve la clé cuisine à momo

    foreach ( $promo as $eleve => $data ) 
    {
        print( "elève : $eleve :<br>");
        foreach ( $data as $key => $value) 
        {
            if (gettype ($value) == 'array')
            {
                print ( "----- $key => ");
                print_r($value);
                print('<br>');
            }
            else
        
            print ( "----- $key => $value<br>");
    }
        print( "-------------------<br>");
    }
print ($promo ['momo']['poids']); //retourne le poids de momo


?>