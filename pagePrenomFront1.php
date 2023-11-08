<<<<<<< HEAD
<?php

    session_start();
    require_once "myLib01.php";
    require_once 'config.php';

    myHeader("infos");

    $names = [
        "prenom",
        "nom",
        "age"
    ];

    createForm($_url."/PHP/pagePrenomBack1.php", $names);

    if (!empty($_SESSION["message"])) {
        $message = $_SESSION["message"];
        print('<p style="color: red; font-weight: bold;">'.$message.'</p>');
    }

=======
<?php
    include "myLib01.php";
    include "parametre.php";

    myHeader( 'info nom' );
    createForm( $__url."/PHP/pagePrenomBack1.php", "prenom",  "ton prenom" );
    myFooter();
>>>>>>> origin/xavier
?>