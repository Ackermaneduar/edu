<?php
	//conexion con la base de datos y el servidor
    $cons_usuario="root";
    $cons_passw="";
    $cons_base_datos="sesion";
    $cons_equipo="localhost";
    $cone=mysqli_connect($cons_equipo,$cons_usuario,$cons_passw,$cons_base_datos);

	//obtenemos los valores del formulario
	$Nombre = $_POST['Nombre'];
	$usuario = $_POST['usuario'];
	$pass = $_POST['pass'];
	$rpass = $_POST['rpass'];

	//Obtiene la longitus de un string
	$req = (strlen($Nombre)*strlen($usuario)*strlen($pass)*strlen($rpass)) or die("No se han llenado todos los campos");

	//se confirma la contraseña
	if ($pass != $rpass) {
		die('Las contraseñas no coinciden, Verifique <br><br> <a href="registrarse.html">Volver</a>');
	}

	//se encripta la contraseña
	$contraseñaUser = md5($pass);

	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO iniciar VALUES('','$Nombre','$usuario','$contraseñaUser')",$link) or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="registrarse.html";
		</script>
	'
?>