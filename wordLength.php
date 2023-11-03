<?php

$list = [
    "terre",
    "mars",
    "jupiter",
    "saturne",
    "pluton",
    "voie lactée",
    "andromède",
    "????????????????????",
    "venus",
    "mercure"
];

$lengthList = array_map("strlen", $list);
$lengthAvg = array_sum($lengthList) / count($list);
$lengthAvgRounded = round($lengthAvg);

print($lengthAvgRounded);

?>