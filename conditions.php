<?php

$age = 15;
$name = "toto";

if ($age >= 18 or $name === "toto") {
    print("Apéro");
} else {
    print("Jus de fruit");
}

print("<br><br>");

$temp = 15;

switch ($temp) {
    case $temp < -10:
        print("très froid");
        break;
    case $temp < 15:
        print("froid");
        break;
    case $temp < 30:
        print("bon");
        break;
    case $temp > 30:
        print("chaud");
        break;
}

?>