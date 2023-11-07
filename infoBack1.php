<?php
    include "parametre.php";

    session_start();

    if( !empty($_POST))
    {
        $prenom = $_POST[ 'prenom' ];
        $nom    = $_POST[ 'nom' ];
        $age    = $_POST[ 'age' ];
        
        if ( $prenom != "" && $nom != "" && $age != "")
        {
            $_SESSION[ 'prenom'  ]  = $prenom;
            $_SESSION[ 'nom'  ]     = $nom;
            $_SESSION[ 'age'  ]     = $age;
            header( 'location: '.$__url.'/PHP/infoFrontFinal.php'   );
        }
        else
            header( 'location: '.$__url.'/PHP/infoFront1.php'   );
    }
?>
