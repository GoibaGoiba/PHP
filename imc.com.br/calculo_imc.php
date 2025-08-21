<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>
    <table border="1">
        <tr>
            <tr>
                <th>
                    <h1>Calculadora de IMC</h1>
                </th>
            </tr>   
            <th>
                <?php
                    $Altura=$_POST["Altura"];
                    $Peso=$_POST["Peso"];
                    $Idade=$_POST["Idade"];
                    $Nome=$_POST["Nome"];
                    $Imc=$Peso/($Altura*$Altura);
                    $Imc=number_format($Imc,2,',','.');
                    echo "$Nome, você está com $Idade anos e seu IMC é $Imc";
                ?>     
            </th>
        </tr>
        <tr>
            <th>
                <?php
                    if ($Imc < 18.5) {
                        echo "<p>Situação: Abaixo do peso</p>";
                    } elseif ($Imc >= 18.5 && $Imc < 24.9) {
                        echo "<p>Situação: Peso normal</p>";
                    } elseif ($Imc >= 25 && $Imc < 29.9) {
                        echo "<p>Situação: Sobrepeso</p>";
                    } elseif ($Imc >= 30 && $Imc < 39.9) {
                        echo "<p>Situação: Obesidade</p>";
                    } else {
                        echo "<p>Situação: Obesidade Grave</p>";
                    }
                ?>
            </th>
        </tr>
    </table>
</body>
</html>