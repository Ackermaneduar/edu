<?php
	//conexion con la base de datos y el servidor
	$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");;
	$db = mysql_select_db("sesion",$link) or die("<h2>Error de Conexion</h2>");

	//obtenemos los valores del formulario
	$Nombre = $_POST['Nombre'];
	$usuario = $_POST['usuario'];
	$pass = $_POST['pass'];
	$rpass = $_POST['rpass'];

	//Obtiene la longitus de un string
	$req = (strlen($nombre)*strlen($usuario)*strlen($pass)*strlen($rpass)) or die("No se han llenado todos los campos");

	//se confirma la contraseña
	if ($pass != $rpass) {
		die('Las contraseñas no coinciden, Verifique <br><br> <a href="Regristrase.html">Volver</a>');
	}

	//se encripta la contraseña
	$contraseñaUser = md5($pass);

	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO iniciar VALUES('','$nombre','$usuario','$contraseñaUser')",$link) or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="Regristrase.html";
		</script>
	'


?>