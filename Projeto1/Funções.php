<?php
function conecta($Usuário,$Senha){
    if($Usuário ==="Admin"&&$Senha==="1234"){
        header("Location: Painel.php");
        exit;
    }else{
        $msg=urlencode("Usuário ou Senha inválidos!");
        header("Location: Index.php?msg=$msg");
        exit;
    }
}
?>