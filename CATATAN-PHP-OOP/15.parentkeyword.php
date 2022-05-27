<?php

/**parent keyword
 * 
 * - kadang kita ingin mengakses function yang terdapat di class parent yang sudah terlanjur kita override 
 * di class child
 * - untuk mengakses function milik class parent, kita bisa menggunakan kata kunci parent
 * - sederhananya parent digunakan untuk mengakses class parent
 * 
 */


require_once "data/parentkeyword.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
echo "Ini class parent : " ;
echo $shape->getCorner() . PHP_EOL;

$rectangle = new Rectangle();
echo "Ini class child : ";
echo $rectangle->getCorner() . PHP_EOL;

echo "Ini class child tapi function parent : ";

echo $rectangle->getParentCorner() . PHP_EOL;