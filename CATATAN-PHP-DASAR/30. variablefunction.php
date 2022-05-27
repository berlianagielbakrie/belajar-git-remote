<?php

function foo()
{
    echo "HEllo foo".PHP_EOL;
}

function bar()
{
    echo "HELLO BAR".PHP_EOL;
}


$functionname = "foo";
$functionname();

$functionname = "bar";
$functionname();


/**kegunaan */

function sayhello(string $name, $filter)
{
    $finalname = $filter($name);
    echo "Hello $finalname" . PHP_EOL;
}

function alias(string $name) : string{
    return "Sample $name";
}

sayhello("Komang", "alias");