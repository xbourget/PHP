<?php
    $a = 0b1100;
    $b = 0b1010;

    print( 'A = '.decbin( $a ).'<br>' );
    print( 'B = '.decbin( $b ).'<br>' );

    $resultat = !$a;
    print( '!A = '.decbin( $resultat ).'<br>' );

    $resultat = !0;
    print( '!0 = '.decbin( $resultat ).'<br>' );

    $resultat = $a | $b;
    print( 'A | B = '.decbin( $resultat ).'<br>' );

    $resultat = $a & $b;
    print( 'A & B = '.decbin( $resultat ).'<br>' );

    $resultat = $a ^ $b;
    print( 'A ^ B = '.decbin( $resultat ).'<br>' );

    $resultat = ~1;
    print( '~1 = '.decbin( $resultat ).'<br>' );

    $resultat = $a>>1;
    print( 'A>>1 = '.decbin( $resultat ).'<br>' );

    $resultat = 10>>1;
    print( '10>>1 = '.decbin( $resultat ).'('.$resultat.')<br>' );

    $resultat = $a<<1;
    print( 'A<<1 = '.decbin( $resultat ).'<br>' );

    $resultat = 10<<1;
    print( '10<<1 = '.decbin( $resultat ).'('.$resultat.')<br>' );
?>





