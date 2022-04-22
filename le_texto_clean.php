<?php
function ler(){
    $arquivo = "get_a+.txt";
    $fp = fopen($arquivo, 'r');
    $conteudo = fread($fp, filesize($arquivo));
    fclose($fp);
    return $conteudo;
}
echo "<h1><strong>Dados recuperados com sucesso</strong></h1>";
echo ler();
//le_texto.php
?>