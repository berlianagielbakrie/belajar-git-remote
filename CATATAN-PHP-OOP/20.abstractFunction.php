<?php

/**Abstract Function
 * 
 * - saat kita membuat class yang abstract, kita bisa membuat abstract function juga di dalam class abstract tersebut
 * - saat kita membuah sebuah abstract function, kita tidak boleh membuat blok function untuk function tersebut
 * - artinya abstract function wajib di override di class child
 * - abstract function tidak boleh memiliki access modifier private
 * 
 */

 require_once "data/animal.php";

 use Data\{Animal, Cat, Dog};


 $cat = new Cat();
 $cat->name = "Luna";
 $cat->run();

 $dog = new Dog();
 $dog->name = "Doggy";
 $dog->run();
