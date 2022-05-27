<?php

class Programmer
{
    public string $name;

    function __construct(string $name){
        $this->name = $name;
    }

}


class BackendProgrammer extends Programmer
{

}

class FrontendProgrammer extends Programmer
{

}

class Company
{
    public Programmer $programmer;
}


function sayHelloProgrammer(Programmer $programmer){
   

    if ($programmer instanceof BackendProgrammer){
        echo "Hello Backend programmer $programmer->name" . PHP_EOL;
    }else if($programmer instanceof FrontendProgrammer){
        echo "Hello Frontend programmer $programmer->name" . PHP_EOL;
    }else{
        echo "Hello programmer $programmer->name" . PHP_EOL;
    }
}