<?

  $linha=file("isset_get.txt");

  $registro = $linha[0];

  $registro += 1;

  $cf=fopen("isset_get.txt","w");
  fputs($cf,"$registro");
  fclose($cf);
// exibe a quantidade de registro
  echo "$registro registro";
