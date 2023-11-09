<?php
    include_once "article01RB.php";
    include_once "facture01RB.php";

    $brou = new Article( 'brouette', 17.99 );
    $arro = new Article( 'arrosoir', 7.5 );
    $bott = new Article( 'botte', 11.15 );
    $pell = new Article( 'pelle', 5 );

    $facture = new Facture(  'toto'  );

    $facture->addArticle( $brou, 1 );
    $facture->addArticle( $bott, 1 );
    $facture->addArticle( $arro, 2 );

    $facture->edit();


    print( '<br>----------------------------<br>');


    $facture2 = new Facture(  'tata'  );

    $facture2->addArticle( $pell, 1 );
    $facture2->addArticle( $bott, 1 );

    $facture2->edit();


    
    




?>
