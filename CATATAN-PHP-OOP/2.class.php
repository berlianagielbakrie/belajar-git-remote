<?php

class Person
{
    //ini adalah lanjutan materi constant
    const AUTHOR = "Programmer zaman Now";


    // berikut adalah object
   var string $name;
   var ?string $addres;
   var string $country = "indonesia" ;

   //lanjutan constructor
   //
    function __construct(string $name, ?string $addres){
        $this->name = $name;
        $this->addres = $addres;
    }

    // berikut adalah function
    // lanjutan dari 4.function.php

    function sayHello(?string $name)
    {
        // berikut adalah lanjutan dari 5.thiskeyword
       if(is_null($name)){
           echo "Hi, my name is $this->name".PHP_EOL;
       }else{
        echo "Hi $name, my name is $this->name".PHP_EOL;
       }
       
    }

    //ini adalah lanjutan self keyword

    function info()
    {
        echo "Author : ". self :: AUTHOR . PHP_EOL;

        // LANJUT DI FUNCTION

    }

    // lanjutan destructro

    function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }
}

$person = new Person("bali","singapur");