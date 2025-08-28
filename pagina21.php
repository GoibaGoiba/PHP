<?php
    function saudacao($nome){
        return "Olá, $nome!";
    }
    echo saudacao("Enzzo")."<br>";
    echo "-----------------------------"."<br>";
    function nomaDaFuncao($parametro1,$parametro2){
        $resultado=$parametro1+$parametro2;
        return $resultado;
    }
    $soma=nomaDaFuncao(5,10);
    echo "O resultado é: ".$soma
?>