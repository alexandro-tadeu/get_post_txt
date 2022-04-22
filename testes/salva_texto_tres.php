<?php

//PEGA OS DADOS ENVIADOS PELO FORMULÁRIO

$nome = $_POST["txt_nome"];
$idade  = $_POST["txt_idade"];
$email  = $_POST["txt_email"];

//PREPARA O CONTEÚDO A SER GRAVADO
$conteudo = "$nome,$idade,$email\r\n";

//ARQUIVO TXT
$arquivo  = "C:\USBWebserver v8.6\root\salva_texto\registro.txt";

//TENTA ABRIR O ARQUIVO TXT
if (!$abrir = fopen($arquivo, "a")) {
        echo  "Erro abrindo arquivo ($arquivo)";
        exit;
   }

//ESCREVE NO ARQUIVO TXT
if (!fwrite($abrir, $conteudo)) {
       print "Erro escrevendo no arquivo ($arquivo)";
       exit;
   }

echo "Arquivo gravado com Sucesso !!";

//FECHA O ARQUIVO 
fclose($abrir);
?>

 
<!DOCTYPE html>
<html>
<head>
  <title> </title>
</head>
<body>
<form method='POST' action='gravar.php'>
Nome:   <input type='text' name='txt_nome' size='40'><br>
Idade:  <input type='text' name='txt_idade' size='2'><br>
Email:  <input type='text' name='txt_email' size='40'><br><br>
<input type='submit' name='btnOK' value='Concluir'>
</form>
</body>
</html>