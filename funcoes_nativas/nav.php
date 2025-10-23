<?php
echo"<h2>Informações do Acesso</h2>";
$ip=$_SERVER['REMOTE_ADDR'];
$nav=$_SERVER['HTTP_USER_AGENT'];
$serv=gethostname();
$vPHP=phpversion();
echo"📱IP do usuário: ".$ip."<br>";
echo"🌐Navegador: ".$nav."<br>";
echo"💻Servidor: ".$serv."<br>";
echo"⚙️Versão do PHP: ".$vPHP."<br>";