<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php    
    include('Conexiones/Conexion.php');     
    $consulta= mysqli_query($conexion,"select * from productos where id=".$_POST['id']);   
?>

<html> 
    <head>      
        <link href="CSS/Login.css" rel="stylesheet" type="text/css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2"></script>
        <script src="JS/login.js" type="text/javascript"></script>
        
        
        <link rel="shortcut icon" type="image/x-icon" href="../IMAGENES/Logo/logo3.ico" />

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta charset="UTF-8">
        <link href="CSS/demo.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Productos.css" rel="stylesheet" type="text/css"/>    
        <title>A.T Energy</title>

        <link href="CSS/font-awesome-ie7.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/font-awesome-ie7.min.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <link href="CSS/Menu.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Principal.css" rel="stylesheet" type="text/css"/>      
        <link href="CSS/Color_Box.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/Formulario.css" rel="stylesheet" type="text/css"/>

        <script src="JS/jquery.min.js" type="text/javascript"></script>
        <script src="JS/jquery.colorbox.js" type="text/javascript"></script>
                
        <script>
            $(document).ready(function () {
                //Examples of how to assign the ColorBox event to elements
                $(".inline").colorbox({inline: true, width: "50%"});
                $(".callbacks").colorbox({
                    onOpen: function () {
                        alert('onOpen: colorbox is about to open');
                    },
                    onLoad: function () {
                        alert('onLoad: colorbox has started to load the targeted content');
                    },
                    onComplete: function () {
                        alert('onComplete: colorbox has displayed the loaded content');
                    },
                    onCleanup: function () {
                        alert('onCleanup: colorbox has begun the close process');
                    },
                    onClosed: function () {
                        alert('onClosed: colorbox has completely closed');
                    }
                });

                //Example of preserving a JavaScript event for inline calls.
                $("#click").click(function () {
                    $('#click').css({"background-color": "#f00", "color": "#fff", "cursor": "inherit"}).text("Open this window again and this message will still be here.");
                    return false;
                });
            });
        </script>

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
        <div id="bar">
            <div id="container">
                <!-- Login Starts Here -->
                <div id="loginContainer">
                    <a href="#" id="loginButton"><span>Login</span><em></em></a>
                    <div style="clear:both"></div>
                    <div id="loginBox">                
                        <form id="loginForm" method="POST" action="Validar_Login.php">
                            <fieldset id="body">
                                <fieldset>
                                    <label for="username">Usuario</label>
                                    <input type="text" name="username" id="username" />
                                </fieldset>
                                <fieldset>
                                    <label for="password">Contraseña</label>
                                    <input type="password" name="password" id="password" />
                                </fieldset>
                                <input type="submit" id="login" value="Ingresar" name="login" />
                                <label for="checkbox"><input type="checkbox" id="checkbox" />Recordar </label>
                            </fieldset>
                            <!--<span><a href="#">Forgot your password?</a></span>-->
                        </form>
                    </div>
                </div>
                <!-- Login Ends Here -->
            </div>
        </div>
        
        <div id="principal">
            <header>       

                <div class="logo">                   
                    <img src="IMAGENES/Logo/Logo.png" alt="" height=100% width=6% position=left/>
                </div> 

                <div class="logo2">                  
                    <img src="IMAGENES/Logo/Nombre.png" alt="" height=100% width=50% position=left/>
                    <div id="rs">                        
                        <h4><p style="color:#045FB4">Número de contacto: 565-4052</p></h4> 
                        <h4><p style="color:#DF7401">Correo Electrónico: admin@at-energysac.com</p></h4>  
                    </div> 
                </div>                         
            </header>  
        </div>

    <navegador>
        <ul>
            <li><a href="Index.html"><i class="icon-home"></i>Inicio</a></li>
            <li><a href="Productos.php"><i class="icon-money"></i>Productos</a></li>
            <li><a href="#"><i class="icon-paste"></i>Noticias</a></li>
            <li><a class='inline' href="#inline_content"><i class="icon-envelope-alt"></i>Contáctenos</a></li>                
        </ul>
        <a id="pull" href="#">Menú</a>
    </navegador>


    <!--Formulario-->
    <div style='display:none'>
        <div id='inline_content' style='padding:10px; background:#fff;'>
            <div id="content">
                <section> 
                    <h4>Solicitud de consulta</h4>
                    <!--Formulario... los datos se mandan a la direccion del servidor e "action"-->
                    <form class="Caja_formulario" action="Consultas.php" method="post">
                        <div>
                            <label for="name">Nombre:</label>
                            <input type="text" id="name" name="user_name" />
                        </div>
                        <div>
                            <label for="mail">E-mail:</label>
                            <input type="email" id="email" name="user_email" />
                        </div>
                        <div>
                            <label for="msg">Mensaje:</label>
                            <textarea id="msg" name="user_message"></textarea>
                        </div>

                        <div class="button">                          
                            <button type="submit">Enviar Consulta</button>                                                
                        </div>
                    </form>
                </section>     
            </div>    
        </div>
    </div>
       
    <div class="contenedor_solo">
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
                <div class="caja_sola">
                    <br><br><br>                     
                    <img src="<?php echo $imagen?>" width="100px" height="100px"><br>   
                    <!--<img src="data:image/jpg;base64,<?php //echo base64_encode($imagen);?>" width="100px" height="100px"/> -->
                    <p><?php echo $precio?></p>
                    <br><br>  
                    <div class="Caja_Nombre"> 
                        <h3><?php echo $nombre?></h3>  
                    </div>    
                    <br><br> 
                    <p>Disponibles: <?php echo $enStock?></p>
                    <br>
                    <form class="Caja_Boton">                            
                        <input class="Boton_Detalles "type="button" value="Volver" name="volver" onclick="history.back()" />                            
                    </form> 
                    <br>
                </div>
               
                <div class="caja_descripcion">
                    <p><h3>Descripción</h3></p>
                    <br>
                    <p><?php echo $desc?></p>
                </div>
                <?php
            }
            ?>
        </div>                 
    <!--<img src="data:image/jpg;base64,<?php //echo base64_encode($imagen);?>" width="200px"/>  -->   
</body>
</html>

