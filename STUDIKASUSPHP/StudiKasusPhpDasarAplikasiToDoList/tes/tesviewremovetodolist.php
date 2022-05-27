<?php

require_once "../model/todolist.php";
require_once "../view/viewremovetodolist.php";
require_once "../bussinesslogic/addtodolist.php";
require_once "../bussinesslogic/showtodolist.php";

addtodolist("Komang");
addtodolist("doni");
addtodolist("kusuma");
addtodolist("vincent");
addtodolist("desta");
addtodolist("andi");

showtodolist();


viewremovetodolist();


showtodolist();