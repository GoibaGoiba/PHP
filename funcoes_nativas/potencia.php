<form method="post">
    <label>Digite um número: </label>
    <input type="text" name="numero"><br><br>
    <label>Digite a potência a ser elevada: </label>
    <input type="text" name="potencia"><br><br>
    <input type="submit" value="Calcular">
</form>
<?php
$numero=$_POST['numero']??'';
$potencia=$_POST['potencia']??'';
if (!empty($numero)&& !empty($potencia)){
    echo "Potência ".pow($numero,$potencia);
}
?>