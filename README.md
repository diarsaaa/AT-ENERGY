<html>    
    <head>        
        <meta charset="UTF-8">
        <title></title>
        <link href="../CSS/Bloque_Superior.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/Menu.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/Principal.css" rel="stylesheet" type="text/css"/>
        <link href="../CSS/Imagenes.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <body>
        <header>         
                <div class="logo"> 
                <img src="../IMAGENES/logo banner.png" alt="" height=90px width=60% position=left/>                    
                </div> 
                <div class="rs"> 
                    <strong>Numero de contacto:159768549</Strong></p>      
                    <strong>Correo Electronico : example@tuGfa.com</Strong>    
                </div> 
        </header>    
        
        <div id="navegador">
            <ul>
                <li><a href="https://www.google.com">Google</a></li>
                <li><a href="https://www.youtube.com">Youtube</a></li>
                <li><a href="#">Hanster</a></li>
                <li><a href="#">Noticias</a></li>
            </ul>
        </div>
        
        <div class="main">
		<div class="slides">
                    <img src="../IMAGENES/338154.jpg" alt=""/> 
                    <img src="../IMAGENES/Fairy-Tail-Logo-Wallpaper-Lighting-620x388.jpg" alt=""/>
                    <img src="../IMAGENES/sword_art_online_2__ggo__sinon_wallpaper_by_arehina-d7tcy3d.jpg" alt=""/>
		</div>
	</div>
         <script src="http://code.jquery.com/jquery-1.9.1.min.js"> </script>         
         <script src="../CONEXION/jquery.slides.js" type="text/javascript"></script>
                <script> 
                $(function(){
                    $(".slides").slidesjs({
                      play: {
                        active: true,
                          // [boolean] Generate the play and stop buttons.
                          // You cannot use your own buttons. Sorry.
                        effect: "slide",
                          // [string] Can be either "slide" or "fade".
                        interval: 3000,
                          // [number] Time spent on each slide in milliseconds.
                        auto: true,
                          // [boolean] Start playing the slideshow on load.
                        swap: true,
                          // [boolean] show/hide stop and play buttons
                        pauseOnHover: false,
                          // [boolean] pause a playing slideshow on hover
                        restartDelay: 2500
                          // [number] restart delay on inactive slideshow
                      }
                    });
                });
                </script>
                
                 <!--   <a class="boton" href="http://laweb.com" target="_blank">Mi botón</a>  -->                    
    </body>
</html>
