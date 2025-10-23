<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio do tigrinho</title>
    <link rel="stylesheet" href="stilos.css">
</head>
<body>
    <form method="post">
        <h1>Sorteio de rifas</h1>
        <label>Coloque o prêmio: </label>
        <input type="text" name="rifa"><br><br>
        <input type="submit" value="Sortear" class="Sort">
    </form><br>
</body>
</html>
<?php
$rifa=$_POST['rifa']??'';
$numrifa=rand(1,1000);
date_default_timezone_set("America/Sao_Paulo");
$dataagr=date("d/m/Y");
$horaagr=date("H:i:s");
if (!empty($rifa)){
    echo "<h2>O Prêmio da Rifa foi: <br><br>";
    echo "$rifa <br><br>";
    echo "O número sorteado pra ganhar foi: <br><br>";
    echo "$numrifa <br><br>";
    echo "A data e hora da rifa: <br><br>";
    echo "$dataagr : $horaagr </h2><br><br>";
}