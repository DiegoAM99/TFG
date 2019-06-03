<!DOCTYPE html>
<html>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo2.ico">
    <head>
        <meta charset="UTF-8">
        <title>GamesWorld</title>
        <link href="Estilos/Style.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="container" style="align-content: center">
          <!--Encabezado con imagen--> 
          <div style="background-color: yellowgreen; align-items: center">
            <img src="img/logo.png" style="width: 10%; height: 10%">
            <br>
            <br>
        </div>
          <div><button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="./Login.php">Iniciar sesión</a></button></div>
          <br>
          <div id="menuh">
         <ul>
             <li><a href="index.php" id="primero">Inicio</a></li>
                 <li><a href="#menuh">Comentarios</a></li>
                 <li><a href="#menuh">Noticias</a></li>
                 <li><a href="#menuh">Contacto</a></li>
                 <li><a href="#menuh">Acerca de nosotros</a></li>
         </ul>
 </div>
        <br>
        <br>
        <!--Buscador-->
        <form method="POST" action="" onSubmit="return validarForm(this)">
 
            <input type="text" placeholder="Buscar" name="palabra" style="width: 25%; height: 20px">
    <input type="submit" value="Buscar" name="buscar">
</form>
        <br>
        <div style="width: 100%; background-color: #00aafd">
            <div>
            <img src="img/juego.jpg">
            <p>19,99€</p>
            <p>Vendedor: Fraxito0</p>
            <p>Vendo este juego porque…<button><a href="./Producto1.php">Más info</a></button></p>
            </div>
            <br>
            <div>
            <img src="img/juego2.jpg" style="text-align: center;">
            <p>25€</p>
            <p>Vendedor: Juan</p>
            <p>Vendo este juego porque no me gusta…<button>Más info</button></p>
            </div>
            <br>
            <br>
            <div>
            <img src="img/juego3.jpg" style="text-align: center;">
            <p>25€</p>
            <p>Vendedor: Rubius</p>
            <p>Vendo este juego porque lo tengo duplicado<button>Más info</button></p>
            </div>
            <div><script src="https://www.powr.io/powr.js?platform=html"></script><div class="powr-comments" id="8d6e7219_1559584545"></div></div>
            <script src="https://www.powr.io/powr.js?platform=html"></script><div class="powr-comments" id="95b420fc_1559588719"></div>
        </div>
        
        </div>
    </body>
</html>