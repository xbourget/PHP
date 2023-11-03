<?php
        
    $texte = "Je ne connaîtrai pas la peur car la peur tue l'esprit. 
    La peur est la petite mort qui conduit à l'oblitération totale. 
    J'affronterai ma peur. Je lui permettrai de passer sur moi, au travers de moi. 
    Et lorsqu'elle sera passée, je tournerai mon œil intérieur sur son chemin. 
    Et là où elle sera passée, il n'y aura plus rien. Rien que moi.
    Litanie contre la peur.

    Chaque route que l'on suit exactement jusqu'au bout ne conduit exactement à rien. 
    Escaladez la montagne pour voir si c'est bien une montagne. 
    Quand vous serez au sommet de la montagne, vous ne pourrez plus voir la montagne.
    ";

    // Split string into word list
    $splitString = explode(" ", $texte);
    print_r($splitString);

    print("<br>");

    // Get total word count of a string
    $wordCount = str_word_count($texte);
    print($wordCount);

    print("<br>");

    // Count number of times specific word is found in string
    $word = "peur";
    $specificWordCount = substr_count($texte, $word);
    print($specificWordCount);

?>