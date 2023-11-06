<?php

for ($temperature = -20; $temperature <= 40; $temperature = $temperature + 5)
{
    //print($temperature);
    if ( $temperature < 0  )
    {    
        print ("il fait très froid");
        print ('<br>');
    }
    elseif ( $temperature > 0 && $temperature < 20  )
    {
        print ("il fait moyen");
        print ('<br>');
    }
    elseif ( $temperature > 20 && $temperature < 40  )
    {
        print ("il fait tres chaud");
        print ('<br>');
    }
    else
    {
        print ("protegez vous");
        print ('<br>');
    }
}







?>