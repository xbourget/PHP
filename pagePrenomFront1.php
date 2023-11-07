<?php

    session_start();
    include "myLib01.php";
    require_once 'ipconfig.php';

    myHeader("infos");

    $names = [
        "prenom",
        "nom",
        "age"
    ];

    if (!empty($_SESSION["message"])) {
        $message = $_SESSION["message"];
        print('<h1>'.$message.'</h1>');
    }

    createForm($_url."/PHP/pagePrenomBack1.php", $names);

?>