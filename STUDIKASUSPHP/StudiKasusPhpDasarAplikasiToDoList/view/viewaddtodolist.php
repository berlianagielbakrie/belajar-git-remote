<?php

require_once __DIR__."/../helper/input.php";
require_once __DIR__."/../model/todolist.php";
require_once __DIR__."/../bussinesslogic/addtodolist.php";

function viewaddtodolist()
{
    echo "MENAMBAH TODO ". PHP_EOL;

    $todo = input("Todo (x untuk batal) ");

    if($todo =="x"){
        echo "batal menambah todo".PHP_EOL;
    }else{
        addtodolist($todo);
    }

   
}