<?php
	include_once('envemail.php');
	$envemail = new Email();
	if (isset($_POST['guardar'])) {
		$cuerpo = "Un nuevo usuario se ha registrado";
		$asunto = $_POST['email']." Se ha registrado recientemente.";
		$enviar = $envemail->enviarEmail($_POST['email'], $_POST['nombre'], $asunto, $cuerpo);
	}
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>USUARIOS</title>
</head>
<body>
	<form action="" method="POST">
	<div align="center">
	<input type="text" placeholder="Nombres" class="form-control" name="nombre">
	<br><br>

	<input type="text" placeholder="Apellidos" class="form-control" name="ape">
	<br><br>

	<input type="text" placeholder="Usuario" class="form-control" name="usuario">
	<br><br>

	<input type="text" placeholder="Email" class="form-control" name="email">
	<br><br>

	<input type="password" placeholder="Password" class="form-control" name="password">
	<br><br>
	
	<input type="password" placeholder="Repetir Password" class="form-control" name="repassword">
	<br><br>

	<input type="submit" name="guardar" value="Registrar" onclick="$enviar">
	</div>
	</form>

</body>
</html>

