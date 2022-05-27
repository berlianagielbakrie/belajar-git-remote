<?php

/**trait abstract function
 * 
 * - selain konkrit function, di trait juga kita bisa menambahkan  abstract function
 * - jika terdapat abstract function di trait, maka secara otomatis function tersebut harus di 
 * override di class yang enggunakan trait tersebut
 * 
 * lanjut di data/saygoodbye.php
 * 
 * 
 */

require_once "data/saygoodbye.php";

use Data\Traits\{Person, SayHello, SayGoodBye,HasName, CanRun};

$person = new Person();
$person->name = "Komang";
$person->run();


/**trait overiding
 * 
 * - jika sebuah class memiliki parent class yang memiliki function yang sama dengan function di trait,
 * maka secara otomatis trait akan mengoverride function tersebut
 * - namun jika kita membuat function yang sama di classnya, maka secara otomatis kita akanmengoverride functin 
 * ditrait
 * - sehingga posisinya seperti ini  ParentClass = override by => Trait = override by => ChildClass
 * 
 */