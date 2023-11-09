<?php
    session_start();

    if( !empty($_POST))
    {
        $prenom = $_POST[ 'prenom' ];
        $nom = $_POST[ 'nom' ];
        $age = $_POST[ 'age' ];

        if ( $prenom != "" and $nom != "" and $age !="" )
        {
            $_SESSION[ 'prenom'  ] = $prenom;
            $_SESSION[ 'nom'  ] = $nom;
            $_SESSION[ 'age'  ] = $age;
            header('location: http://192.168.1.126/PHP/PageFrontLynda2.php');
        }
        else
        {
            header('location: http://192.168.1.126/PHP/PageFrontLynda.php');
        }
    }

   
    
?>