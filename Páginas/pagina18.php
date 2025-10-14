<?php
    $Valor1=$_POST['Valor1'];
    $Valor2=$_POST['Valor2'];
    $Sinal=$_POST['Sinal'];
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