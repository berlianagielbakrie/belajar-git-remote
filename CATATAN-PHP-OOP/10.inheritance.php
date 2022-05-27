<?php

/**inheritance atau pewarisan
 * 
 * - inheritance adalah kemampuan untuk menurunkan sebuah class ke class lain
 * - dalam artian, kita bisa membuat class parent dan class child
 * - class child, hanya bisa punya satu class parent, namun class parent bisa 
 * memiliki banyak class child
 * - saat sebuah class diturunkan, maka semua properties dan function yang ada di class parent
 * secara otomatis akan dimiliki oleh class child
 * - untuk melakukan pewarisan, di class child, kita harus menggunakan kata kunci extends 
 * lalu diikuti dengan nama class parentnya.
 * 
 * 
 */

 class Manager{
     
    var string $name;

    function sayHello(string $name) : void // void berarti tidak mengembalikan value
    {
        echo "Hi $name, my name is $this->name" . PHP_EOL;
    }


 }

 class VicePresident extends Manager{

 }

 $manager = new Manager();
 $manager->name = "komang";
 $manager->sayHello("doni");

 $vp = new VicePresident();
 $vp->name = "Budi";
 $vp->sayHello("Joko");

 