<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="Formulario.php" method="post">
        <Label><b>Nome da pessoa a ser atendida</b></Label><br><br>
        <input type="text" name="Nome"><br><br>
        <input type="submit" value="Atender">
    </form>
    <h3>Lista de atendimentos</h3>
    <?php
    $nomeAt=$_POST["Nome"]??"";
    $Arquivo=fopen("Atendimento.txt","a");
    fwrite($Arquivo, "$nomeAt\n");
    fclose($Arquivo);
    echo "Arquivo alterado com sucesso!\n";
    $Arquivo=fopen("Atendimento.txt","r");
        while(!feof($Arquivo)){
        echo fgets($Arquivo)."<br>";
    }
    fclose($Arquivo);
    ?>
</body>
</html>