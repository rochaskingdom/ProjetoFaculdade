<?php
include ("cabecalho.php");
include ("logica-usuario.php");
?>

<?php if(isset($_SESSION["success"])) { ?>
<p class="alert-success"><?= $_SESSION["success"] ?></p>
<?php
    unset($_SESSION["success"]);
}
?>

<?php if(isset($_SESSION["danger"])) { ?>
<p class="alert-danger"><?= $_SESSION["danger"] ?></p>
<?php
    unset($_SESSION["danger"]);
}
?>

<h1>Bem vindo!</h1>

<?php if(usuarioEstaLogado()) { ?>
<p class="text-success">Voce esta logado como <?= usuarioLogado() ?>. <a
		href="logout.php">Deslogar</a>
</p>
<?php } else { ?>
<h2>Login</h2>
<form action="login.php" method="post">
	<table class="table">
		<tr>
			<td>Email</td>
			<td><input class="form-control" type="email" name="email"></td>
		</tr>
		<tr>
			<td>Senha</td>
			<td><input class="form-control" type="password" name="senha"></td>
		</tr>
		<tr>
			<td><button class="btn btn-primary" type="submit">Login</button></td>
		</tr>
	</table>
</form>
<?php } ?>
