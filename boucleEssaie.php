<?php

    $temperature = -20;
    do {

        if($temperature <= 0) 
            print("Y fait froid.... Y fait $temperature degré");
        elseif($temperature > 0 && $temperature <= 25)
            print("Y fait bon... Y fait $temperature degré");
        else
            print("Y fait trop chaud ! Y fait $temperature degré");
        
        $temperature = $temperature + 5;
        print('</br>');

    } while ($temperature <= 40);

?>