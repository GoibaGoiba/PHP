<form method="post">
    <label>Digite um número para calcular sua raiz: </label>
    <input type="text" name="numero"><br><br>
    <input type="submit" value="Calcular">
</form>
<?php
$numero=$_POST['numero']??'';
echo "<br>Raiz: ".sqrt($numero)."<br>";