<?php
header("Content-type: text/html; charset=utf-8");

if (isset($_POST['nome']) and isset($_POST['datanas'])){
    
  $nome = $_POST['nome'];
	$datanas = $_POST['datanas'];
	$datamat = $_POST['datamat'];
	$texto = $_POST['texto'];
	
    
    $conteudo = "$nome,$datanas,$datamat,$texto\r\n";
    
    $arquivo = fopen('dep_r.txt','a+');
    fwrite($arquivo,$conteudo);
    fclose($arquivo);
}
?>
<!DOCTYPE html>
<html>
   <body>
      <form method="post">
         <input type="text" name="nome" /></br>
         <input type="date" name="datanas" /></br>
		 <input type="date" name="datamat" /></br>
		 
         <textarea name="texto"></textarea>
         <button>Enviar</button>
      </form>
   </body>
</html>