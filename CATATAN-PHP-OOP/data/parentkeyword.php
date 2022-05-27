<?php

namespace Data;

class Shape
{


    public function getCorner() : int
    {
        return  0;
    }

}


class Rectangle extends Shape
{
    public function getCorner() : int
    {
        return 4;
    }

    //ini adalah cara untuk mengakses function yang ada diparent yang sudah di overriding

    public function getParentCorner() : int 
    {
        return parent::getCorner();
    }
}