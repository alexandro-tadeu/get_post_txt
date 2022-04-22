<?php
 
if (isset($_POST['texto']) and isset($_POST['nome']) and isset($_POST['email'])) {
  
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $texto = $_POST['texto'];
   
   $conteudo = "$nome,$email,$texto\r\n";

   $arquivo = fopen('isset_r.txt','a+');
   fwrite($arquivo, $conteudo);
   fclose($arquivo);
}
?>
<!DOCTYPE html>
<html>
   <body>
      <form method="post">
         <input type="text" name="nome" /></br>
         <input type="text" name="email" /></br>
         <textarea name="texto"></textarea>
         <button>Enviar</button>
      </form>
   </body>
</html>