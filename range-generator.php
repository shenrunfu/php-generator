<?php
generatorWay();

function generatorWay()
{
    $time = microtime(true);
    $counter = 0;

    foreach (myrange(0, 1000000) as $number) {
        $counter++;
    }

    echo "\ntime executed: " . (microtime(true) - $time);
    echo "\nmemory usage: " . (memory_get_peak_usage() / 1000000) . ' mb';
    echo "\npeak memory usage: " . (memory_get_peak_usage() / 1000000) . ' mb';
}

function myrange($start, $end)
{
    for (; $start < $end; $start++) {
        yield $start;
    }
}

//function myYield()
//{
//    yield 2;
//    yield 1;
//    yield 3;
//}
//
//foreach (myYield() as $number) {
//    echo "\n$number";
//}