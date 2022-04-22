<?php
$arquivo = "isset_get.txt";
// Este � o arquivo de texto que mantemos na nossa contagem

$handle = fopen($arquivo, 'r+') ;
/*
Aqui vamos definir o arquivo, as permiss�es para ler e escrever, por isso utilizamos o r+ (ler e escrever no arquivo)
*/

$data = fread($handle, 512) ;
//Obtem a contagem atual do arquivo

$contador = $data + 1;
//Adiciona + 1
print "Voc� � o visitante n�mero ".$contador;
//Exibe na tela o resultado encontrado no TXT

fwrite($handle, $contador) ;
// Salva o valor da variavel contador no arquivo

fclose($handle) ;
// Fecha o arquivo
?>
