<?php
#http://localhost:8080/turma_b/get.php?username=atms&senha=1234&e_mail=alexandro.tadeu@etec.sp.gov.br

header("Content-type: text/html; charset=utf-8");

$username = $_POST['username'];
$senha = $_POST['senha'];
$email = $_POST['email'];

echo "Meu login é: $username </br> minha senha é:$senha </br> e meu email para contato é:$email";
?>