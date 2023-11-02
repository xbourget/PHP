<?php
$monNom="toto";
$age=13;



print("nom : $monNom age : $age ") ;
for ($i = 1; $i <= 10; $i++) {
    echo $i .  "<br> ";
}
echo "<br>";

for ($i = 0; $i <= 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
$a=0;
while(1)
{
    echo $a  ;
    $a++;
    if ( $a < 5 )
        continue;
    print( "après continue<br>");
    if ( $a == 10 )
        break;
}



?>