<?php
function generator()
{
    yield 1;
    yield 2;
    yield 3;
}

foreach (generator() as $value) {
    echo $value . PHP_EOL;
}