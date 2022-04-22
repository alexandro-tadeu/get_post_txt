<?php
/*
O parâmetro mode especifica o tipo de acesso que você precisa ao stream. Pode ser um dos seguintes:

Lista dos possíveis modos de fopen() utilizando mode
mode	Descrição
'r'	Abre somente para leitura; coloca o ponteiro do arquivo no começo do arquivo.
'r+'	Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo.
'w'	Abre somente para escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.
'w+'	Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.
'a'	Abre somente para escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.
'a+'	Abre para leitura e escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.
'x'	Cria e abre o arquivo somente para escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as flags O_EXCL|O_CREAT para a chamada de sistema open(2).
'x+'	Cria e abre o arquivo para leitura e escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as flags O_EXCL|O_CREAT para a chamada de sistema open(2).*/

header("Content-type: text/html; charset=utf-8");

$name = 'grava_arquivo.txt';
$text = 'Olá. meu nome é Alexandro';
//fopen função do php para abrir o arquivo
$file = fopen($name, 'a');
//fwrite função do php utilizada para escrever dentro do arquivo
fwrite($file, $text);

//fclose função do php utilizada para fechar o arquivo
fclose($file);
echo "</br>";
echo "<h1><strong>Dados armazenados com sucesso</strong></h1>";
?>