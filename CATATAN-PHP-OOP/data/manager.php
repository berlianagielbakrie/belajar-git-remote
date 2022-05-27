<?php

class manager
{
    var string $name;

    var string $tittle;

    //lanjutan constuctor 16. 

    public function __construct(string $name = "", string $tittle = "Manager"){
        $this->name = $name;
        $this->tittle = $tittle;
    }

     // lalu kita akan mengoveride constructor di vicePresident dibawah

    function sayHello(string $name) : void 
    {
        echo "Hi $name, my name is manager  $this->name" . PHP_EOL;

    }

    
}

class VicePresident extends manager{

    // lanjutan 14. function overriding 
    // yaitu menimpa function sayhello dari class manager

    function sayHello(string $name) : void 
    {
        echo "Hi $name, my name is VP $this->name" . PHP_EOL;

    }

    public function __construct(string $name = "")
    {
        // ini tidak wajib, tapi disarankan
        parent::__construct($name, "VP");
    }

}
