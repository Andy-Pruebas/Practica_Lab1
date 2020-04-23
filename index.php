<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Login de usuarios</title>
</head>

<body>
<div class="wrapper fadeInDown">
	<div id="formContent">
<center>
<form method="POST" action="validacion.php">
	<input type="text" class="fadeIn second" name="user" placeholder="Usuario" />
<br />
	<input type="password" class="fadeIn third"name="clave" placeholder="Contraseña" />
<br />
	<button type="submit"class="fadeIn fourth">Iniciar Sesion</button>
</form>
</center>
</div>
</div>

</body>
</html>