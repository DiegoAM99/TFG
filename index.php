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
             <li><a href="index.php #abajo">Comentarios/Sugerencias</a></li>
             <li><a onclick="pulsar()">Contacto</a></li>
             <li><a href="https://www.borntoplay.es/">Novedades</a></li>
         </ul>
 </div>
        <br>
        <br>
        <!--Buscador-->
        <form method="POST" action="" onSubmit="return (this)">
 
            <input type="text" placeholder="Buscar" name="palabra" style="width: 25%; height: 20px">
    <input type="submit" value="Buscar" name="buscar">
</form>

 
</P></FORM></DIV>
 
</P></FORM></DIV>
        <br>
        <div style="width: 100%; background-color: #00aafd; clear: both">
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
            <p>Vendo este juego porque lo tengo duplicado...<button>Más info</button></p>
            </div>
            <br>
            <div><script src="https://www.powr.io/powr.js?platform=html"></script><div class="powr-comments" id="8d6e7219_1559584545"></div>
                <script src="https://www.powr.io/powr.js?platform=html"></script><div class="powr-comments" id="95b420fc_1559588719"></div><a name="abajo"></a></div>
        <button><a href="index2.php">Siguiente Página</a></button>
        </div>

<div id="cajacookies">
<p><button onclick="aceptarCookies()" class="pull-right"><i class="fa fa-times"></i> Aceptar y cerrar éste mensaje</button>
Éste sitio web usa cookies, si permanece aquí acepta su uso.
Puede leer más sobre el uso de cookies en nuestra <a href="politica.html">política de privacidad</a>.
</p>
</div>
        </div>
    </body>
</html>
<script>
/* ésto comprueba la localStorage si ya tiene la variable guardada */
function compruebaAceptaCookies() {
  if(localStorage.aceptaCookies == 'true'){
    cajacookies.style.display = 'none';
  }
}

/* aquí guardamos la variable de que se ha
aceptado el uso de cookies así no mostraremos
el mensaje de nuevo */
function aceptarCookies() {
  localStorage.aceptaCookies = 'true';
  cajacookies.style.display = 'none';
}

/* ésto se ejecuta cuando la web está cargada */
$(document).ready(function () {
  compruebaAceptaCookies();
});
</script>
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