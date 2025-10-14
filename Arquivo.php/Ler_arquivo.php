<?php
    $Arquivo=fopen("Dados.txt","r");
    while(!feof($Arquivo)){
        echo fgets($Arquivo)."<br>";
    }
    fclose($Arquivo);
?>