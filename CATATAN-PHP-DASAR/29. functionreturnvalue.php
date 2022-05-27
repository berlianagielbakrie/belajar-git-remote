<?php


function sum(int $first, int $last){

    return $first + $last;
}

$total = sum(10,20);
var_dump($total);

$jumlah = sum(20,39);
var_dump($jumlah);

/**contoh lain */

function getfinalvalue(int $values)
{
    if ($values >= 80){
        return "A";
    }else if($values >= 70){
        return "B";
    }else if($values >= 60){
        return "C";
    }else if($values >= 50){
        return "D";
    }else{
        return "E";
    }
}

$score = getfinalvalue(90);
var_dump($score);

/**mendeklarasikan tipe return */

function tum(int $first, int $last) : int
{

    return $first + $last;
}

$total = tum(10,20);
var_dump($total);

$jumlah = tum(20,39);
var_dump($jumlah);


function hetfinalvalue(int $values) : string
{
    if ($values >= 80){
        return "A";
    }else if($values >= 70){
        return "B";
    }else if($values >= 60){
        return "C";
    }else if($values >= 50){
        return "D";
    }else{
        return "E";
    }
}

$score = hetfinalvalue(90);
var_dump($score);