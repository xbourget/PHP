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
    
    function createForm( $urlAction, $name,  $message="" )
    {
        print( '<form action="'.$urlAction.'" method="post">');
            print(' <input type="text" name="'.$name.'" placeholder="'.$message.'" />'); 
            print(' <input type="submit" name="submit" value="OK" />');
        print(' </form>');
    }

    function startForm( $urlAction )
    {
        print( '<form action="'.$urlAction.'" method="post">');
    }

    function endForm( )
    {
        print(' <input type="submit" name="submit" value="OK" />');
        print(' </form>');
    }

    function createInput( $name,  $message="", $value=""  )
    {
        print(' <input type="text" name="'.$name.'" placeholder="'.$message.'" value="'.$value.'" />'); 
        print( '<br>' );
    }

?>

