<p> Olá aqui é um HTML</p>
<?php
    $aluno=["Nome"=>"Francisco","Nota"=>100,"Idade"=>16];
    echo "Olá {$aluno["Nome"]}, você tem {$aluno["Idade"]} e sua nota é {$aluno["Nota"]}"."<br>";
    echo "Olá ". $aluno["Nome"].", você tem ".$aluno["Idade"]." e sua nota é ". $aluno["Nota"]."<br>";
?>