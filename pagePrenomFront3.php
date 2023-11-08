<?php
    include "myLib01.php";
    include "parametre.php";

<<<<<<< HEAD
    session_start();

    $nom        = $_SESSION[ 'nom' ];
    $prenom     = $_SESSION[ 'prenom' ];
    $age        =$_SESSION['age'];
    print( "<h1>hello $prenom $nom tu as  $age ans </h1>");
    
=======
    myHeader( 'info nom' );
    createForm( $__url."/PHP/pagePrenomBack3.php", "age",  "ton age" );
    myFooter();
>>>>>>> origin/xavier
?>
