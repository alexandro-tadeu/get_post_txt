<?php
echo "<h1><strong>Dados recuperados com sucesso</strong></h1>";

$arquivo = "isset_get.txt";
if (!file_exists($arquivo)) {
    echo "O arquivo não existe";
} else {
    $fp = fopen($arquivo, 'r');

    while (!feof($fp)) {

        $linha = fgets($fp, 4096); #4096 bytes de dados em cada linha.
        echo  $linha . "</br>";
    }

    fclose($fp);
}
