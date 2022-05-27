<?php

/**alternatif anonymous function
 * yang sangat sederhana
 */

 $firstname = "komang";
 $lastname = "doni";


 /** ini contoh menggunakan anonim function */
$annonymous = function() use($firstname, $lastname) : string {
    return "Hello $firstname $lastname" .PHP_EOL;
};


/**ini contoh menggunakan arrow function */

$arrow = fn() => "Hello $firstname $lastname" .PHP_EOL;

echo $annonymous();
echo $arrow();