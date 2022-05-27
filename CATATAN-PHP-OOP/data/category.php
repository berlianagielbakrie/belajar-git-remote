<?php


class Category
{
    private string $name; // ini namanya properti
    private bool $expensive; // ini namanya properti


     public function getName() : string 
     {
         return $this->name;
     }

    public function setName(string $name) : void
    {
        if(trim($name) != "") { // jika string yang dimasukkan kosong maka tidak akan berjalan

           
            $this->name = $name;
        }
        
        
    }

    
    public function isExpensive() : bool
    {
        return $this->expensive;
    }

    public function setExpensive(bool $expensive) : bool
    {
       return $this->expensive = $expensive;
        
       
    }

}

