<?php
function nota($n1){
    if($n1>=7){
        echo "Você foi aprovado!";
    } if($n1>=5 && $n1<7){
        echo "Você está de recuperação.";
    } if($n1<5){
        echo "Você foi reprovado.";
    }
    }
$n1=$_POST["Nota"];
nota($n1);