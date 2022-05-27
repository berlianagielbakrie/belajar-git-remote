<?php



$sayhello = function (string $name){
    echo "Hello $name". PHP_EOL;
};

$sayhello("EKO");
$sayhello("Komang");

function saygoodbye(string $name, $filter){
    $finalname = $filter($name);
    echo "GOODBYE $finalname".PHP_EOL;
}

saygoodbye("komang", function(string $name) : string{
    return strtoupper($name);
});

/**mengakses variable diluar anony function
 * 
 * $firstname = "Komang";
 $lastname = "Doni";

 $sayhello = function () 
 {
    echo "Hello $firstname $lastname".PHP_EOL;
 };

 $sayhello();

 ini eror.

 yang benar yang seperti ini 
 */

 $firstname = "Komang";
 $lastname = "Doni";

 $sayhello = function () use($firstname, $lastname)
 {
    echo "Hello $firstname $lastname".PHP_EOL;
 };

 $sayhello();