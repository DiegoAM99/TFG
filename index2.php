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
          <button><a href="CerrarSesion.php" onclick="pulsar2()">Cerrar Sesión</a></button>
          <br>
          <div id="menuh">
         <ul>
             <li><a href="index.php" id="primero">Inicio</a></li>
             <li><a href="#menuh">Comentarios/Sugerencias</a></li>
             <li><a onclick="pulsar()">Contacto</a></li>
             <li><a href="https://www.borntoplay.es/">Novedades</a></li>
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
                <img src="img/juego4.jpg">
            <p>40€</p>
            <p>Vendedora: Maria</p>
            <p>Vendo este juego porque…<button><a href="./Producto2.php">Más info</a></button></p>
            </div>
            <br>
            <div>
                <img src="img/juego5.jpg" style="text-align: center;">
            <p>25€</p>
            <p>Vendedor: José</p>
            <p>Vendo este juego porque me aburre y…<button>Más info</button></p>
            </div>
            <br>
            <br>
            <div>
                <img src="img/juego6.jpg" style="text-align: center;">
            <p>30€</p>
            <p>Vendedor: Pepe</p>
            <p>Vendo este juego porque ya no me entretiene como antes y...<button>Más info</button></p>
            </div>
            <div><script src="https://www.powr.io/powr.js?platform=html"></script><div class="powr-comments" id="8d6e7219_1559584545"></div></div>
            <script src="https://www.powr.io/powr.js?platform=html"></script><div class="powr-comments" id="95b420fc_1559588719"></div>
            <button><a href="index.php">Anterior Página</a></button>
        </div>
        </div>
    </body>
</html>
<SCRIPT>
function pulsar() {
alert("Si hay algún problema no olvide contactar conmigo enviandome un correo a: jorgeesbuenagente@yopmail.com");
}
</SCRIPT>
<SCRIPT>
function pulsar2() {
alert("Has cerrado la sesión");
}
</SCRIPT>