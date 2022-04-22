<?php
 
if (isset($_GET['texto']) and isset($_GET['nome']) and isset($_GET['email'])) {
  
   $nome = $_GET['nome'];
   $email = $_GET['email'];
   $texto = $_GET['texto'];
   
   $conteudo = "$nome,$email,$texto\r\n";

   $arquivo = fopen('get_a+.txt','a+');
   fwrite($arquivo, $conteudo);
   fclose($arquivo);
}

?>
<!DOCTYPE html>
<html>
   <body>
      <form method="get">
         <input type="text" name="nome" /></br>
         <input type="text" name="email" /></br>
         <textarea name="texto"></textarea>
         <button>Enviar</button>
      </form>
   </body>
</html>