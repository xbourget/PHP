<?php
$temp = 19;



for ($i = -20; $i <= 40; $i += 5, print('<br>')) 
{
    if ($temp<-20 && $temp<-10 )
    print("c'est tres tres froid ");
    if ($temp<-11 && $temp<0 )
    print("c'est  tres froid ");
    if ($temp<1 && $temp<10 )
    print("c'est froid ");
    if ($temp<11 && $temp<20 )
    print("c'est  chaud ");
    if ($temp<20 && $temp<40 )
    print("c'est trs chaud");

}


?>