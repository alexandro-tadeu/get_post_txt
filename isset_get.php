<?php


if (isset($_GET['nome']) and isset($_GET['data']) and isset($_GET['email']) and isset($_GET['mensagem'])) {

    $nome = $_GET['nome'];
    $data = $_GET['data'];
    $email = $_GET['email'];
    $mensagem = $_GET['mensagem'];

    $conteudo = "$nome\n $data\n $email\n $mensagem\r\n";

    $arquivo = fopen('isset_get.txt', 'a+');
    fwrite($arquivo, $conteudo);
    fclose($arquivo);
    echo "Nome: $nome </br> Data:$data </br> Email:$email </br> Mensagem é:$mensagem";
}
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
