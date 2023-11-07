<?php
    session_start();

    require_once 'ipconfig.php';

    $_SESSION['message'] = "";

    if( !empty($_POST)) {

        $prenom = $_POST[ 'prenom' ];
        $nom = $_POST[ 'nom' ];
        $age = $_POST[ 'age' ];

        if ( $prenom != "" && $nom != "" && $age != "" ) {

            $_SESSION[ 'prenom'  ] = $prenom;
            $_SESSION[ 'nom'  ] = $nom;
            $_SESSION[ 'age'  ] = $age;

            header( "location: $_url/PHP/pagePrenomFront2.php"   );

        } else {

            $_SESSION[ 'message'  ] = "Merci de remplir tous les champs!";
            header( "location: $_url/PHP/pagePrenomFront1.php"   );

        }
    }
?>
