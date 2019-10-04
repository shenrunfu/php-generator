<?php

$time = microtime(true);
$counter = 0;

// 1 million
foreach (myrange(0, 1000000) as $number) {
    $counter++;
}

echo "\ntime executed: " . (microtime(true) - $time);
echo "\npeak memory usage: " . (memory_get_peak_usage() / 1024 / 1024) . ' mb';


function myrange($start, $end)
{
    for (; $start < $end; $start++) {
        yield $start;
    }
}
