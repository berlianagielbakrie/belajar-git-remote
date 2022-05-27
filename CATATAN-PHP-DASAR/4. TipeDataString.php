<?php

echo 'Nama : ';
echo 'Komang Doni Kusuma';
echo "\n";

echo "Nama : \n";
echo "Komang \t Doni \t Kusuma";

echo <<<EKO
Heredoc
dengan fitur ini
kita bisa mengetik apa saja
sebebas kita
dan akan terprint sesuai yang kita ketik

EKO;

echo <<<'EKO'
nowdoc
dengan fitur ini
kita bisa mengetik apa saja
sebebas kita
dan akan terprint sesuai yang kita ketik
tapi tidak bisa ada ketik didalamnya
'EKO';