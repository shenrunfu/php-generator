<?php

$time = microtime(true);
$counter = 0;

foreach (range(0, 1000000) as $number) {
    $counter++;
}

echo "\ntime executed: " . (microtime(true) - $time);
echo "\npeak memory usage: " . (memory_get_peak_usage() / 1000000) . ' mb';

