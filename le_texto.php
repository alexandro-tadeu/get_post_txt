<?php

//Criamos uma função que irá retornar o conteúdo do arquivo.
function ler()
{
    //Variável arquivo armazena o nome e extensão do arquivo.
    $arquivo = "isset_get.txt";
    //Variável $fp armazena a conexão com o arquivo e o tipo de ação.
    $fp = fopen($arquivo, 'r');

    //Lê o conteúdo do arquivo aberto.
    $conteudo = fread($fp, filesize($arquivo));
    //Fecha o arquivo.
    fclose($fp);
    //retorna o conteúdo.
    return $conteudo;
}
echo "<h1><strong>Dados recuperados com sucesso</strong></h1>";
echo ler();

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
