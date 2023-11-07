<?php
$team =
    [   
        'James' => 
            [
                'age'   => 40,
                'loisir' => 'musique',
                'ville' => 'Rouen'
            ],

            'Clara' => 
            [
                'age'   => 35,
                'loisir' => 'roller',
                'ville' => 'Bordeaux'
            ],

            'Louis' => 
            [
                'age'   => 27,
                'loisir' => 'gaming',
                'ville' => 'Paris'
            ]
    ];

    print('la team est constituée de: <br><br>');
    foreach ($team as $name => $data)
    {
        print($name. '<br>');
        foreach ($data as $key => $value)
        {
            print ( "----- $key => $value<br>");
            
        }
        print( "********************<br>");
    }

    $json = json_encode($team);
    print($json);
?>