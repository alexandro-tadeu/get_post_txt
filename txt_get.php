<?php
header("Content-type: text/html; charset=utf-8");

$name = 'arquivo_get.txt';
$text = $_GET['nome'];
$text = var_export($_GET, true);
//fopen função do php para abrir o arquivo
$file = fopen($name, 'a');
//fwrite função do php utilizada para escrever dentro do arquivo
fwrite($file, $text);

//fclose função do php utilizada para fechar o arquivo
fclose($file);
?>