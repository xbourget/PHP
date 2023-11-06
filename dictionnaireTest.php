<?php
$stagaire=
[
    'linda'=>
    [
        'nom'=>'khenissi',
        'age'=>29,
        'adresse'=>'2 rue  de la touraine ',
        'num'=>06333333
    ],

     'nora'=>
         [
        'nom'=>'ababba',
        'age'=>29,
        'adresse'=>'2kkk kkk kk  ',
        'num '=>06333333
         ],
         

         'josé'=>
         [
            
        'nom'=>'avavav',
        'age'=>29,
        'adresse'=>'33 kk hh jj ',
        'num '=>06333333
         ],


         'lynda'=>
         [
            
        'nom'=>'aaaa',
        'age'=>29,
        'adresse'=>'2 jjj jj kk ',
        'num '=>06333333
         ],


         'clémon'=>
         [
            
        'nom'=>'loki jnoijoa',
        'age'=>29,
        'adresse'=>'2 jjj jj kk ',
        'num '=>06333333
         ]

         ];


foreach ( $stagaire as $eleve => $data ) 
    {
        print( "elève : $eleve :<br>");
        foreach ( $data as $key => $value) 
            print ( "----- $key => $value<br>");
        print( "-------------------<br>");
    }

?>