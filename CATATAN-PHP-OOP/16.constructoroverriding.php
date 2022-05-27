<?php

/**
 * Constructor Overriding
 * 
 * - karena constructor sama seperti function, maka constructor pun bisa kita deklarasikan ulang di class childnya
 * - sebenarnya di PHP, kita bisa meng override function dengan arguments yang berbeda, namun sangat
 * tidak disarankan
 * - jika kita melakukan override function dengan arguments berbeda maka php akan menampilkan warning
 * - namun berbeda dengan constructor overriding, kita boleh meng override dengan mengubah
 * arguments nya, namun direkomendasikan untuk memanggil parent constructor. 
 * 
 * lanjut di data/ manager.php
 * 
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