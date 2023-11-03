<?php

for ($temperature = -20; $temperature <= 40; $temperature += 5, print("<br>")) {

    print("$temperature °C => ");

    switch (true) {
        case $temperature <= 0:
            print("Glacial");
            break;        
        case $temperature <= 10:
            print("Froid");
            break;
        case $temperature <= 15:
            print("Frais");
            break;
        case $temperature <= 20:
            print("Bon");
            break;      
        case $temperature <= 25:
            print("Chaud");
            break;
        case $temperature <= 35:
            print("Très chaud");
            break;
        default:
            print("Canicule");
    }

}    
?>