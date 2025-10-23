<form method="post">
    <label>Digite um número: </label>
    <input type="text" name="a"><br><br>
    <label>Digite um número: </label>
    <input type="text" name="b"><br><br>
    <label>Digite um número: </label>
    <input type="text" name="c"><br><br>
    <label>Digite um número: </label>
    <input type="text" name="d"><br><br>
    <label>Digite um número: </label>
    <input type="text" name="e"><br><br>
    <input type="submit" value="Calcular">
</form>
<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$mav=max($a,$b,$c,$d,$e);
$mev=min($a,$b,$c,$d,$e);
echo"Valores comparados: $a, $b, $c, $d e $e : <br>";
echo"O maior valor é: $mav e o menor valor é $mev";