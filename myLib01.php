<?php

    function myHeader( $titre="ma page" )
    {
        $var = "<!DOCTYPE html>
        <html lang=\"en\">
        <head>
            <meta charset=\"UTF-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <title>$titre</title>
        </head>
        <body>
        ";
        print( $var );
    }

    function myFooter()
    {
        $var = "
        </body>
        </html>
        ";
        print( $var );

    }
    function myTable($width, $height,$contenu= '*')
    {
        
        print ('<table>');
        for ($i=0; $i<$height; $i++)
        {
            print ('<tr>');   //debut de ligne
            for ($j=0; $j<$width; $j++)
            {print ('<td>');    //debut dinsertion de contenu dans la lignes du tableau
            print ($contenu);
            print ('</td>'); //fin dinsertion de contenu dans la lignes du tableau
            }
            print ('</tr>'); //fin de ligne
        }
       
        print ('</table>');
    }
?>

