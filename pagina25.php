<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function parouimpar($n1){
        if($n1%2==0){
            return "Par";
        } else{
            return "Ímpar";
        }
    }
    $n1=$_POST["n1"];
    echo parouimpar($n1)."<br>";
    ?>
    <button onclick="window.history.back()">Voltar</button>
</body>
</html>