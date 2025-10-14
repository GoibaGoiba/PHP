<?php
function saudacao($nome){
    return "Bem-vindo, $nome! sua participação foi confirmada";
}
function banco_dados($db){
    return "Seu banco, $db, foi conectado com sucesso!";
}
function fiap($A1,$A2,$A3,$obs){
    echo "<h3> Lista de alunos com observações </h3>";
    echo "<ul>";
    echo "<li>$A1</li>";
    echo "<li>$A2</li>";
    echo "<li>$A3</li>";
    echo "</ul>";
    echo "<b><h2>Observação: $obs </h2></b>";
}
?>