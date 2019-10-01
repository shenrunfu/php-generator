<?php
function generator()
{
    yield 1;
    yield 2;
    yield 3;

    return 'done';
}

$gen = generator();

// what the problem of this loping?

echo $gen->current() . PHP_EOL;

foreach (generator() as $value) {
    echo $value . PHP_EOL;
}

// better of looping

//echo $gen->current() . PHP_EOL;
//
//$gen->next();
//while($gen->valid()) {
//    echo $gen->current() . PHP_EOL;
//    $gen->next();
//}

echo $gen->getReturn()  . PHP_EOL;