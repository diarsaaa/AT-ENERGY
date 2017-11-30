<?php
	//conexion con la base de datos y el servidor
	include ('Conexiones/Conexion.php');
	//obtenemos los valores del formulario
	$nombres = $_POST['user_name'];
	$email = $_POST['user_email'];
	$consulta = $_POST['user_message'];


	//Obtiene la longitus de un string
	$req = (strlen($nombres)*strlen($email)*strlen($consulta)) or die("No se han llenado todos los campos");

	//se confirma la contraseña
	//if ($pass != $rpass) {
	//	die('Las contraseñas no coinciden, Verifique <br /> <a href="index.html">Volver</a>');
	//}

	//se encripta la contraseña
	//$contraseñaUser = md5($pass);

	//ingresamos la informacion a la base de datos
	mysqli_query($conexion,"INSERT INTO pagina_web_consultas (Nombre,E_Mail,Consulta) VALUES('$nombres','$email','$consulta')") or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="index.html";
		</script>
	'
?>