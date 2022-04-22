<?php
#http://localhost:8080/_2019/_2/_GET_POST_texto/get.php?nome=Alexandro%20Tadeu&email=alexandro.tadeu@etec.sp.gov.br&texto=Teste%20de%20envio%20de%20texto%20via%20url

header("Content-type: text/html; charset=utf-8");

$username = $_GET['nome'];
$data = $_GET['data'];
$email = $_GET['email'];
$mensagem = $_GET['mensagem'];

echo "Nome: $username .</br> Data:$data </br> Email:$email </br> Mensagem é:$mensagem";

?>

