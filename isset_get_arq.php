<?php

if (isset($_GET['nome']) && isset($_GET['data']) && isset($_GET['email']) && isset($_GET['mensagem'])) {

    $email = $_GET['email'];
    $nome = $_GET['nome'];
    $data = $_GET['data'];
    $mensagem = $_GET['mensagem'];


    if (!file_exists($email . "isset_get.txt")) {
        $cria = fopen($email . 'isset_get.txt', 'a+');

        $dados .= "$nome\n";
        $dados .= "$data\n";
        $dados .= "$email\n";
        $dados .= "$mensagem\r\n";

        $escreve = fwrite($cria, $dados);
        fclose($cria);

        echo "Dados cadastrados com sucesso! </br>";
    } else {
        echo "Esse usuário já foi cadastrado </br>";
    }
}

echo "Nome: $nome </br> Data:$data </br> Email:$email </br> Mensagem é:$mensagem";
echo "</br>";
echo "</br>";
echo "<form method='post'>";
echo
"<left>
          <button class='waves-effect waves-light btn type='submit' name='action'  formaction='formulario_get.php'>Cadastrar
          </button>
          <button class='waves-effect waves-light btn type='submit' name='action'  formaction='le_texto.php'>ler
          </button>
        </left>
        <br/>
    </form>
            <br/>";
echo "</br>";
echo "</br>";
