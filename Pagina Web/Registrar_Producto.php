<?php
Include ('Conexiones/Conexion.php');
$id=$_POST['txtID'];
$nom=$_POST['txtNom'];
$foto=$_FILES['foto']['name'];
$ruta=$_FILES['foto']['tmp_name'];
$desp=$_POST['txtDes'];
$precio=$_POST['txtPrecio'];
$stock=$_POST['txtStock'];
$fecha=$_POST['txtFecha'];

$destino="Productos_Galeria/".$foto;
copy($ruta,$destino);

mysqli_query($conexion,"insert into productos values('$id','$destino','$nom','$desp','$precio','$stock','$fecha')")or die("<h2>Error Guardando los datos</h2>");
echo'
		<script>
			alert("Registro Exitoso");
			location.href="Productos_Registro.php";
		</script>
	'
?>
