<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
   echo "Esta pagina es solo para usuarios registrados.<br>";
   echo "<br><a href='Index.html'>Login</a>";
exit;
}

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();

echo "Su sesion a terminado,
<a href='Index.html'>Necesita Hacer Login</a>";
exit;
}
?>

<?php    
    include('Conexiones/Conexion.php');    
    $consulta=  mysqli_query($conexion,"select * from productos");  
?>

<html> 
    <head>      
        <link rel="shortcut icon" type="image/x-icon" href="../IMAGENES/Logo/logo3.ico" />

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta charset="UTF-8">
        <link href="CSS/demo.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Productos_Registro.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Productos.css" rel="stylesheet" type="text/css"/>
        <title>A.T Energy</title>      
        <link href="CSS/Principal.css" rel="stylesheet" type="text/css"/>   
        <link href="CSS/Menu.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Color_Box.css" rel="stylesheet" type="text/css"/>
        
        <link href="CSS/font-awesome-ie7.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/font-awesome-ie7.min.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        
        <script src="JS/jquery.min.js" type="text/javascript"></script>
               
         <script>
            $(function () {
                var pull = $('#pull');
                menu = $('navegador ul');
                menuHeight = menu.height();

                $(pull).on('click', function (e) {
                    e.preventDefault();
                    menu.slideToggle();
                });
            });
            $(window).resize(function () {
                var w = $(window).width();
                if (w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        </script>       
    </head>
    
    <body>
        <div id="principal">
            <header>       

                <div class="logo">                   
                    <img src="IMAGENES/Logo/Logo.png" alt="" height=100% width=6% position=left/>
                </div> 

                <div class="logo2">                  
                    <img src="IMAGENES/Logo/Nombre.png" alt="" height=100% width=50% position=left/>
                    <div id="rs">       
                        <a href="Logout.php"><i class="icon-arrow-left"></i>Salir</a>
                        <h4><p style="color:#045FB4">Número de contacto: 565-4052</p></h4> 
                        <h4><p style="color:#DF7401">Correo Electrónico: admin@at-energysac.com</p></h4>  
                    </div> 
                </div>                         
            </header>  
        </div>
        
        <navegador>
        <ul>
            <li><a href="Productos_Registro.php"><i class="icon-paste"></i>Registrar Itens</a></li>
            <li><a href="Consultas_Ver.php"><i class="icon-inbox"></i>Ver Consultas</a></li>                    
        </ul>
        <a id="pull" href="#">Menú</a>
        </navegador>
    
    <center><strong><h4>Registrar Itens</h4><br></strong></center>
    <form action="Registrar_Producto.php" method="POST" enctype="multipart/form-data">
            <center><table border="1">
            <tr bgcolor="skyblue">        
                <td><strong>ID:</strong></td><td> <input autofocus type="text" name="txtID" value="" required ></td>
                <td><strong>Nombre:</strong></td><td> <input type="text" name="txtNom" value="" required ></td>
            </tr>        

            <tr bgcolor="skyblue">
            <td bgcolor="skyblue"><strong>Foto:</strong></td>  <td colspan="4"><input type="file" name="foto" id="foto" required ></td>
            </tr>
            
            <tr bgcolor="skyblue">
            <td bgcolor="skyblue"><strong>Descripcion:</strong></td><td colspan="4"><textarea id="msg" name="txtDes" required ></textarea></td>
            </tr>
            
            <tr bgcolor="skyblue">        
                <td><strong>Precio:</strong></td><td> <input type="text" name="txtPrecio" value="" required ></td>
                <td><strong>Stock:</strong></td><td> <input type="text" name="txtStock" value="" required ></td>
            </tr>                    
            
            <tr bgcolor="skyblue">
                <td><strong>Fecha:</strong></td><td> <input type="text" name="txtFecha" value="" required ></td>
                <td colspan="2" align="center" bgcolor="skyblue"><input class="Boton" type="submit" name="enviar" value="Enviar"></td>
            </tr>
            </table></center>
    </form>    
    <center><br><br><a href="Admin.php"><i class="icon-arrow-left"></i>Volver</a></center>    
        <br>
        <div class="contenedor">
            <?php 
                while($filas= mysqli_fetch_array($consulta)){
                    $id=$filas['id'];
                    $imagen=$filas['imagen'];
                    $nombre=$filas['nombre'];
                    $desc=$filas['descripcion'];
                    $precio=$filas['precio'];
                    $enStock=$filas['stock'];
                    $fecha=$filas['fecha'];               
                ?>
                <div class="caja">
                    <br>                  
                    <img src="<?php echo $imagen?>" width="100px" height="100px"><br>
                    <p><?php echo $precio?></p> 
                    <br><br>  
                    <div class="Caja_Nombre"> 
                        <h3><?php echo $nombre?></h3>  
                    </div>              
                </div>
                <?php
            }
            ?>
        </div>            
</body>
</html>
