<?php

$dados = [];
$arquivo = fopen('credentials.txt', 'r');

while(!feof($arquivo)){
    $dado = fgets($arquivo);
    $dados[] = $dado;
}

fclose($arquivo);

?>
