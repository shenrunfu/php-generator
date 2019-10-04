<?php

$counter = 0;
// change to xrange to fix the problem
// 10 millions
foreach (range(0, 10000000) as $number) {
    $counter++;
}
echo $counter;

function xrange($start, $max)
{
    for ($i = $start; $i < $max; $i++) {
        yield $i;
    }
}