<?php

/**pengecekan data null */

/**kita coba dengan if else dlu */

$data = [
    'action' => null
];

if(isset($data['action'])){
    $a = $data['action'];
}else{
    $a = 'nothing';
}

echo $a . PHP_EOL;

/**menggunakan null C O */

$buku = [
    'komik'=>'doraemon'
];

$b = $buku['komik']??'nothing';

echo $b . PHP_EOL;