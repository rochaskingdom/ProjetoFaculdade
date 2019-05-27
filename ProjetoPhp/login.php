<?php
include("conecta.php");
include ("banco-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
setcookie("usuario_logado", $usuario["email"]);
if($usuario == null) {
    header("Location: index.php?login=0");
} else {
    header("Location: index.php?login=1");
}
die();