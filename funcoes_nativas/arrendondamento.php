<form method="post">
    <label>Digite um número: </label>
    <input type="text" name="numero"><br><br>
    <input type="submit" value="Calcular">
</form>
<?php
$numero=$_POST['numero'];
echo round($numero);