<?php

require_once "data/confilct.php";
require_once "data/Helper.php";


/**use keyword
 * 
 * - jika terlalu sering menggunakan class, function atau constant yang sama, 
 * maka terlalu banyak duplikasi dengan menyebut namespace yang sama berkali kali
 * - hal ini bisa kita hindari dengan cara mengimport class, function atau constant 
 * tersebut dengan menggunakan kata kunci use
 * 
 * tapi kita tidak bisa mengimport 2 kelas yang sama
 * 
 */

use Data\one\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict();
$conflict2 = new Data\two\Conflict();

helpMe();

echo APPLICATION . PHP_EOL;

/** Alias
 * 
 * - saat kita menggunakan use, artinya kita tidak perlu lagi menggunakan
 * nama namespace diawal class ketika kita ingin membuat class tersebut
 * - namun bagaimana jika kita ternyata nama classnya sama?
 * - php memiliki fitur bernama alias
 * - alias adalah kemampuan untuk membuat nama lain dari class, function dan constant
 * yang ada
 * - kita bisa menggunakan kata kunci as setelah menggunakan use
*/


use Data\one\Conflict as Conflict1;
use Data\two\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;


$conflict1 = new Conflict1;
$conflict2 = new Conflict2;

help();
echo APP . PHP_EOL;


/**Group use declaration
 * 
 * - kadang kita butuh melakukan import banyak hal di satu namespace yang sama
 * - PHP memliki fitur grup use, dimana kita bisa import beberapa class, function
 * atau constant dalam satu perintah use
 * - untuk melakukan itu, kita bisa menggunakan {}
 * 
 * lanjut di file data/import grup
 */

 