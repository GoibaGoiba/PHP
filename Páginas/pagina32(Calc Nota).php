<?php
function nota($n1,$Disciplina){
    if($n1>=7){
        echo "Você foi aprovado na disciplina de ".$Disciplina.".";
    } if($n1>=5 && $n1<7){
        echo "Você está de recuperação em ".$Disciplina.".";
    } if($n1<5){
        echo "Você foi reprovado em ".$Disciplina.".";
    }
    }
$n1=$_POST["Nota"];
$Disciplina=$_POST["Disciplina"];
nota($n1,$Disciplina);