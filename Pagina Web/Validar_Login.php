<?php
session_start();
?>

<?php
include ('Conexiones/Conexion.php');

				$usuario = $_POST['username'];
				$pw = $_POST['password'];
				$log = mysqli_query($conexion,"SELECT * FROM usuarios WHERE Usuario='$usuario' AND Contrasena='$pw'");
				if (mysqli_num_rows($log)>0) {
					$row = mysqli_fetch_array($log);
                                        $_SESSION['loggedin'] = true;
                                        $_SESSION['start'] = time();
                                        $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
					
                                        $_SESSION["Usuario"] = $row['Usuario']; 
				  	//echo 'Iniciando sesión para '.$_SESSION['Usuario'].' <p>';
					echo '<script> window.location="Admin.php"; </script>';
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="Index.html"; </script>';
				}
mysqli_close($conexion); 
?>