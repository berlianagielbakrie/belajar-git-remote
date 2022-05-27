<?php


class Product
{

    private string $name;
    private int $price;

    public function __construct(string $name, int$price)
    {
        $this->name = $name;
        $this->price = $price;


    }

    //cara agar bisa mengambil private access

    public function getName() : string 
    {
        return $this->name;
    }

    public function getPrice() : string 
    {
        return $this->price;
    }




    
}