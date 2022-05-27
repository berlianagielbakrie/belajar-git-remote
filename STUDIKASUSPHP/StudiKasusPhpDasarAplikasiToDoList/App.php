<?php

require_once __DIR__."/view/viewaddtodolist.php";
require_once __DIR__."/view/viewshowtodolist.php";
require_once __DIR__."/view/viewremovetodolist.php";
require_once __DIR__."/helper/input.php";
require_once __DIR__. "/model/todolist.php";
require_once __DIR__ ."/bussinesslogic/addtodolist.php";
require_once __DIR__ ."/bussinesslogic/showtodolist.php";
require_once __DIR__ ."/bussinesslogic/removetodolist.php";

echo "Aplikasi Todolist" . PHP_EOL;

viewshowtodolist();