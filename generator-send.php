<?php

function printer() {
    echo "I'm printer!". PHP_EOL;

    while (true) {
        $string = yield;
        echo $string . PHP_EOL ;
    }
}

// would it print anything?
$printer = printer();

// what it would print
$printer->send('Hello world!');
//$printer->send('Bye world!');


