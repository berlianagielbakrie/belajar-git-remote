<?php


require_once __DIR__."/../Helper/input.php";
require_once __DIR__."/../Bussinesslogic/removetodolist.php";

function viewremovetodolist()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan =input("Nomor(x untuk batal)");

    if($pilihan =="x"){
        echo "batal menghapus todo" . PHP_EOL;
    }else{
        $success = removetodolist($pilihan);

        if($success){
            echo "SUKSES MENGHAPUS TODO NOMOR $pilihan".PHP_EOL;
        }else{
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }

   
}