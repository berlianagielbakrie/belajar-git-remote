<?php

function a(int $value){

    if($value == 1){
        return 1;
    }else{
        return $value * a($value -1);
    }

}

var_dump(a(5));