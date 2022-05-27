<?php

namespace Data;

//lanjutan 23. interfaceinheritace 

interface HasBrand
{
    function getBrand() : string;

}

interface IsMaintenance
{
    function IsMaintenace() : bool;
}

// karena interface car sudah extends interface HasBrand
// maka pada class avanza yang meng implements interface car
// harus menambahkan interface function yang dimiliki interface HasBrand
interface Car extends HasBrand 
{
    function drive() : void;

    function getTire(): int;
}


// lalu class avanza akan menambahkan implements implements isMaintenance
class Avanza implements Car, IsMaintenace{
    
    public function drive() : void 
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire() : int 
    {
        return 4;
    }

    public function GetBrand() : string 
    {
        return "Toyota" . PHP_EOl;
    }

    public function IsMaintenace() : bool 
    {
        return fales;
    }
}