<?php
 
if (isset($_POST['texto']) and isset($_POST['nome']) and isset($_POST['email'])) {
  
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $texto = $_POST['texto'];
   
   $conteudo = "$nome,$email,$texto\r\n";

   $arquivo = fopen('post_a+.txt','a+');
   fwrite($arquivo, $conteudo);
   fclose($arquivo);
}
?>