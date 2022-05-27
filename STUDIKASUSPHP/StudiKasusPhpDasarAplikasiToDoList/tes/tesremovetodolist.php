<?php


require_once "../model/todolist.php";
require_once "../bussinesslogic/addtodolist.php";
require_once "../bussinesslogic/showtodolist.php";
require_once "../bussinesslogic/removetodolist.php";


addtodolist("Komang");
addtodolist("doni");
addtodolist("kusuma");
addtodolist("budi");
addtodolist("andi");
addtodolist("desta");

showtodolist();

removetodolist(3);

showtodolist();

removetodolist(2);

showtodolist();

$succes = removetodolist(6);

var_dump($succes);

showtodolist();
