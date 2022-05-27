<?php

/**sebuah parameter yang dibelakang nya ada tulisa
 * callabel itu adalah sebuah function.
 * dan bisa dipanggil seperti funcion pada umumnya.
 * 
 * callable bisa dipanggil dengan cara : 
 *  - $filter()
 *  - $finalname = call_user_func($filter, $name);
 * ini sebenarnya sama dengan
 * 
 * $filter($name);
 * 
 */

function sayhello(string $name, callable $filter)
{
    $fullname = call_user_func($filter, $name);
    echo "Hello $fullname" . PHP_EOL;
}

sayhello("Komang", "strtoupper");
sayhello("Komang","strtolower");
sayhello("Komang", function(string $name) : string{
    return strtoupper($name);
});
sayhello("Komang", fn($name) => strtoupper($name));
