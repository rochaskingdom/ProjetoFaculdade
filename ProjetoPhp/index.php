<?php include("cabecalho.php"); ?>

<?php if(isset($_GET["login"]) && $_GET["login"]==true) { ?>
	<p class="alert-success">Logado com sucesso!</p>
<?php }?>
<?php
if(isset($_GET["login"]) && $_GET["login"]==false) {?>
	<p class="alert-danger">Usuario ou senha invalida!</p>
<?php }?>

<h1>Bem vindo!</h1>

	<?php
if(isset($_COOKIE["usuario_logado"])) {
?>
<p class="text-success">Você está logado como <?= $_COOKIE["usuario_logado"] ?></p>
<?php }?>

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
			<td><button type="submit" class="btn btn-primary">Login</button></td>
		</tr>
	</table>
</form>
<iframe
 width="600"
 height="450"
 frameborder="0" style="border:0"
 src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDyPpLtaDnFwrlqwYh6hFWY1KBjB3m2A04
 &q=Brasilia+Sobradinho+Sobradinho+shopping" allowfullscreen>
</iframe>
<?php include("rodape.php"); ?>
