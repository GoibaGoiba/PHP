<?php
$texto="Ricardo";
echo "Seu nome invertido é ".strrev($texto);
if ($texto==$textoinv){
    echo "Seu nome invertido é $textoinv <br>";
    echo "É um palindromo";
}else{
    echo "Seu nome invertido é $textoinv <br>";
    echo "Não é um palindromo";
}