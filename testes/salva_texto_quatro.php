<?php 
// Verifica se o POST tem algum valor
if ( !isset( $_POST ) || empty( $_POST ) ) {
	$erro = 'Nada foi postado.';
}
// Cria as variáveis dinamicamente
foreach ( $_POST as $chave => $valor ) {
	// Remove todas as tags HTML
	// Remove os espaços em branco do valor
	$$chave = trim( strip_tags( $valor ) );
	
	// Verifica se tem algum valor nulo
	if ( empty ( $valor ) ) {
		$erro = 'Existem campos em branco.';
	}
}

// Verifica se $email realmente existe e se é um email. 
// Também verifica se não existe nenhum erro anterior
if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) && !$erro ) {
	$erro = 'Envie um email válido.';
}

// Se existir algum erro, mostra o erro
if ( $erro ) {
	echo $erro;
} else {
	// Se a variável erro continuar com valor falso
	// Você pode fazer o que preferir aqui, por exemplo, 
	// enviar para a base de dados, ou enviar um email
	// Tanto faz. Vou apenas exibir os dados na tela.
	echo "<h1> Veja os dados enviados</h1>";
	
	foreach ( $_POST as $chave => $valor ) {
		echo '<b>' . $chave . '</b>: ' . $valor . '<br><br>';
	}

//Armazena os dados em strings
$nome = $_POST['nome']; 
$email = $_POST['email']; 
$endereco = $_POST['endereco']; 

//Cria um Arquivo
$arquivo = 'nome_do_arquivo.txt'; 

$criar = fopen($arquivo, "a+"); 

//Define o conteudo do arquivo 
$conteudo = "Nome:$nome\n E-mail:$email\n Endereço:$endereco"; 

//Escreve no arquivo que foi criado 
$escrever = fwrite($criar, $conteudo); 

if($escrever == true){ echo "Dados armazenados em $arquivo"; } else { echo "Erro ao salvar dados em $arquivo"; 
}
?>
