<?php
 
if (isset($_POST['nome']) and isset($_POST['texto'])){
   
   $nome = $_POST['nome'];
   $texto = $_POST['texto'];

   /* \r\n -> CRLF (windows)
      São alguns tipos de caracteres esteciais para descer pra linha de baixo, como quando você aperta enter enquanto digita no bloco de notas.*/ 

   $conteudo = "$nome, $texto\r\n";
   
   $arquivo = fopen('get_a+.txt', 'a+');
   
   fwrite($arquivo, $conteudo);
   fclose($arquivo);
  
  echo "</br>";
   echo "<h1><strong>Dados armazenados com sucesso</strong></h1>";
}
?>
<!DOCTYPE html>
<html>
   <body>
      <form method="post">
         <input type="text" name="nome" /></br>
         <textarea name="texto"></textarea>
         <button>Enviar</button>
      </form>
   </body>
</html>