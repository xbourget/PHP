<?php

    session_start();
    require_once "myLib01.php";
    require_once 'ipconfig.php';

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

?>