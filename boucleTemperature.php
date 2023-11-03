<?php

    

    for($temperature = -20; $temperature <= 40; $temperature+=5) {
        if($temperature < -5) {
            print("$temperature il fait Très froid<br>");
        }
        elseif($temperature < 10) {
            print("$temperature il fait Froid<br>");
        }
        elseif($temperature < 20){
            print(" $temperature il fait Beau<br>");
        }
        elseif($temperature < 30) {
            print("$temperature il fait Chaud<br>");
        }
        else{
            print("$temperature il fait Très chaud<br>");
        }
    }

    
?>