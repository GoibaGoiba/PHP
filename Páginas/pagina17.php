<?php
    $Valor1=$_GET['Valor1'];
    $Valor2=$_GET['Valor2'];
    $Sinal=$_GET['Sinal'];
    $resultado=$Valor1.$Sinal.$Valor2;
    echo "$resultado = ";
    if ($Sinal == "+"){
        echo $Valor1 + $Valor2;
    }
    if ($Sinal == "-"){
        echo $Valor1 - $Valor2;
    }
    if ($Sinal == "*"){
        echo $Valor1 * $Valor2;
    }
    if ($Sinal == "/"){
        echo $Valor1 / $Valor2;
    }
?>