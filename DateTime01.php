<?php

// https://www.php.net/manual/en/class.datetime.php
$now = new DateTime( 'now' );

print(  $now->format('Y-m-d H:i:s').'<br>' );
print(  $now->format('Y-m-d').'<br>' );


// différence de date
$naissance = new DateTimeImmutable('1961-05-21');
$age = $naissance->diff($now);
print(  $age->format('%Y ans').'<br>' );

// différence de date
$begin  = new DateTime('2023-01-01');
$end    = new DateTime('2023-12-31');

$interval = DateInterval::createFromDateString('1 week');

$period = new DatePeriod($begin, $interval, $end);

foreach ($period as $dt) 
{
    print( $dt->format("l Y-m-d H:i:s\n").'<br>');
}


?>
