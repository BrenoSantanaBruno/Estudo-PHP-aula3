<?php
$arquivo = fopen("meu_arquivo.txt", "w");
fwrite($arquivo, "Este é o conteúdo do arquivo.");
fclose($arquivo);
?>