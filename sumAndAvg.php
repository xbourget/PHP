<?php

$notes = [6, 4, 7, 4, 8, 9, 4, 0, 5, 5, 4, 5, 7, 5, 3, 2, 2, 1, 5, 5];

$sum = array_sum($notes);
$count = count($notes);
$avg = $sum / $count;

print($avg);

?>