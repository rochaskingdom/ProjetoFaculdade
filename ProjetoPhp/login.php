<?php
include ("conecta.php");
include ("banco-usuario.php");
include ("logica-usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);

if ($usuario == null) {
    $_SESSION["danger"] = "Usu�rio ou senha inv�lido.";
    header("Location: index.php");
} else {
    $_SESSION["success"] = "Usu�rio logado com sucesso.";
    logaUsuario($usuario["email"]);
    header("Location: index.php");
}
die();
