<?php

namespace Data\Traits;

trait SayGoodBye
{

   public function goodBye(?string $name) : void 
    {
        if (is_null($name)){
            echo "Good Bye" . PHP_EOL;
        }else{
            echo "Good bye $name" . PHP_EOL;
        }
    }
}


trait SayHello
{

   public function hello(?string $name) : void 
    {
        if (is_null($name)){
            echo "Hello" . PHP_EOL;
        }else{
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;


}

//lanjutan 25.traitoverriding.php 

trait CanRun
{
    public abstract function run() : void;
}

//ketika meng overide trait yang berisi abstract function maka kita harus
// mengoveride abstract functionya juga

class Person 
{
    use SayGoodBye, SayHello, HasName, CanRun;

    public function run() : void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }
}