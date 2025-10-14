<?php
    $Arquivo=fopen("Dados.txt","w");
    fwrite($Arquivo, "Primeira linha de texto\n");
    fclose($Arquivo);
    echo "Arquivo alterado com sucesso!";
?>