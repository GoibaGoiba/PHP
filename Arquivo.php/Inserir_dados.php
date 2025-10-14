<?php
    $Arquivo=fopen("Dados.txt","a");
    fwrite($Arquivo, "Primeira Linha de texto\n");
    fclose($Arquivo);
    echo "Arquivo alterado com sucesso!";
    
?>