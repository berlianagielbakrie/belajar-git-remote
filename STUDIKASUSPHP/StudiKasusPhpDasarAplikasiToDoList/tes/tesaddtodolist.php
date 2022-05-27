<?php

require_once "../model/todolist.php";
require_once "../bussinesslogic/addtodolist.php";

addtodolist("Komang");
addtodolist("Doni");
addtodolist("kusuma");
addtodolist("diningrat");

var_dump($todolist);