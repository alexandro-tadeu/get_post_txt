<?php

# 1.Faça um programa que leia um numero inteiro e o imprima

header("Content-type: text/html; charset=utf-8");

echo ('<h1>Faça um programa que leia um numero inteiro e o imprima</h1>');
# declaração de variável recebendo um valor fixo

#http://localhost:8080/_2019/lista/ex01.php?celsus=25
#Usando metódo GET como passagem de parametro

$int = $_GET['int'];
$conv = (int)$int;
$resto = $conv / 2;

if (is_int($resto)) {

  echo "O valor da variável é do tipo inteiro";
  echo "</br>";

  echo "</br>";
} else {
  echo "O valor da variável não é um número inteiro!";
  echo "</br>";
}
