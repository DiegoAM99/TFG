<?php
$usuario = "root";
$contrasena = "";  
$servidor = "localhost";
$basededatos = "videojuegos";
$conexion = mysqli_connect( $servidor, $usuario, "" );
$db = mysqli_select_db( $conexion, $basededatos );
?>
<!-- el resultado de la búsqueda lo encapsularemos en un tabla -->
       <?php
       //obtenemos la información introducida anteriormente desde nuestro buscador PHP
       $buscar = $_POST["palabra"];
 
       $consulta_mysql= mysql_query ("SELECT nombre_producto FROM productos WHERE nombre de producto like '%$buscar%'");
       $resultado = mysqli_query( $conexion, $consulta_mysql );
       if($resultado == $consulta_mysql){
           echo $resultado;
       }
       mysqli_close( $conexion );
       $consulta = "SELECT * FROM videojuegos";
 ?>

