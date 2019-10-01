<?php

//normalWay();
//echo (134217728 / 1000 / 1000);

normalWay();


function normalWay()
{
    $time = microtime(true);
    $counter = 0;
    foreach (range(0, 1000000) as $number) {
        $counter++;
    }

    echo "\ntime executed: " . (microtime(true) - $time);
    echo "\nmemory usage: " . (memory_get_usage() / 1000000) . ' mb';
    echo "\npeak memory usage: " . (memory_get_peak_usage() / 1000000) . ' mb';
}

