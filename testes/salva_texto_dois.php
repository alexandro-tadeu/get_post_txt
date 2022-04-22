<? 

//PEGA OS DADOS ENVIADOS PELO FORMULÁRIO

$nome = $_POST["nome"]; 
$idade = $_POST["idade"]; 

//PREPARA O CONTEÚDO A SER GRAVADO

	$conteudo = "$nome,$idade";

	$arquivo = fopen('dois_msg.txt','w');
	fwrite($arquivo, $conteudo);
	fclose($arquivo);
?> 
<!DOCTYPE html>
<html>
   <body>
<form method="post">
<input type="text" name="nome" /></br>
<input type="text" name="idade" /></br>
<input type="submit" value="gravar" />
</form>

   </body>
</html>