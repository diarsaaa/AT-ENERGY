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
    $consulta=  mysqli_query($conexion,"select * from pagina_web_consultas");
?>

<html> 
    <head>      
        <link rel="shortcut icon" type="image/x-icon" href="../IMAGENES/Logo/logo3.ico" />

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta charset="UTF-8">
        <link href="CSS/demo.css" rel="stylesheet" type="text/css"/>

        <title>A.T Energy</title>

        <link href="CSS/font-awesome-ie7.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/font-awesome-ie7.min.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <link href="CSS/Menu.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Principal.css" rel="stylesheet" type="text/css"/>     
        <link href="CSS/Consultas_Ver.css" rel="stylesheet" type="text/css"/>

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
                        <br>
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
    <center>
        <a href="Admin.php"><i class="icon-arrow-left"></i>Volver</a>
    </center>
   
    <div class="contenedor_consultas">
            <?php 
                $nro_reg= mysqli_num_rows($consulta);
            
                if($nro_reg==0){
                    echo '<h3>No se tienen Consultas Pendientes</h3>';
                }             
                while($filas= mysqli_fetch_array($consulta)){
                    $id=$filas['ID'];                   
                    $nombre=$filas['Nombre'];
                    $email=$filas['E_Mail'];
                    $peticion=$filas['Consulta'];              
                ?>
                <div class="caja_consultas">
                    <br>
                    <div class="Caja_Nombre"> 
                    <h3><?php echo $nombre?></h3>  
                    <p><?php echo $email?></p> 
                    </div>
                    <div class="Caja_Peticion"> 
                    <p><?php echo $peticion?></p>  
                    </div> 
                    <br>
                </div>
                <?php
            }
            ?>
    </div>            
</body>
</html>

