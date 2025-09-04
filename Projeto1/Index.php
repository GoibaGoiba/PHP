<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="Login.php" method="post">
        Login <br>
        <input type="text" name="Usuário"><br>
        Senha <br>
        <input type="password" name="Senha"><br><br>
        <input type="submit" value="Entrar">
    </form>
    <?php
    if (isset($_GET["msg"])){
        echo "<p style=color:red>".htmlspecialchars($_GET["msg"])."<p>";
    }
    ?>
</body>
</html>