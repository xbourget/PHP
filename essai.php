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
            'musique' => 'flute',
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

foreach ( $promo as $eleve => $data ) 
{
    print( "elève : $eleve :<br>");
    foreach ( $data as $key => $value) 
        print ( "----- $key => $value<br>");
    print( "-------------------<br>");
}

?>