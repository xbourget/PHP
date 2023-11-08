<?php

    function myHeader( $titre="ma page" )
    {
        $var = "<!DOCTYPE html>
        <html lang=\"en\">
        <head>
            <meta charset=\"UTF-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <title>$titre</title>
            <style>
            td: border: 1px solid black;
            </style>
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

    function myTable( $width, $height,$carac='()' )
    {
        print( "<table>\n");
        for( $i=0 ; $i<$height ; $i++ )
        {
            print( "<tr>\n");
            for( $j=0 ; $j<$width ; $j++ )
            {
                print( "<td>\n");
                print( $carac );
                print( "</td>\n");
            }
            print( "</tr>\n");
        }
        print( "</table>\n");

    }
function createForm( $urlAction, $name,  $message="" )
    {
    print( '<form action="'.$urlAction.'" method="post">');
        print(' <input type="text" name="'.$name.'" placeholder="'.$message.'" />'); 
        print(' <input type="submit" name="submit" value="OK" />');
    print(' </form>');
    }


?>
