<?php

//Criamos uma função que irá retornar o conteúdo do arquivo, com quebra de linhas.
function ler(){
    //Variável arquivo armazena o nome e extensão do arquivo.
    $arquivo = "parametro_w.txt";
     
    //Variável $fp armazena a conexão com o arquivo e o tipo de ação.
    $fp = fopen($arquivo, 'r');
 
    //Lê o conteúdo do arquivo aberto.
    //Se uma conexão aberta por fsockopen() não foi fechada pelo servidor, feof() irá esperar até que seja atingido o limite de tempo para retornar TRUE . 
    while (!feof ($fp)) {
      //Ela captura uma única linha de dados do arquivo e a retorna como uma sequência. Nela, é possível imprimir ou processar os seus dados de outra forma. O exemplo na Listagem 1 imprime perfeitamente um arquivo inteiro.
        $valor = fgets($fp, 4096);
        //O texto acima é lido em 4.096 bytes (4 KB) de dados. Observe que, independentemente do número especificado, a fread não lerá mais de 8.192 bytes (8 KB).
 
        echo $valor."<br>";
    }
    //Fecha o arquivo.
    fclose($fp);
     
    //retorna o conteúdo.
}

echo "<h1><strong>Dados recuperados com sucesso</strong></h1>";

echo ler();
 
?>