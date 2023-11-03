<?php

$prenoms = ["eudes", "sigismond", "barnabus", "gontran", "gertrude"];

foreach( $prenoms as $prenom ) {

    print(ucfirst($prenom));

    if ($prenom == "gontran") {
        print("! Joyeux anniversaire ma couillasse!!");
    } else {
        print("...");
    }

    print("<br>");

}

?>