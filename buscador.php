<?php  
if($_POST['buscar']) 
{   
   ?>
   <!-- el resultado de la búsqueda lo encapsularemos en un tabla -->
   <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
       <tr>
            <!--creamos los títulos de nuestras dos columnas de nuestra tabla -->
            <td width="100" align="center"><strong>id_producto</strong></td>
            <td width="100" align="center"><strong>nombre_producto</strong></td>
       </tr> 
       <?php
       //obtenemos la información introducida anteriormente desde nuestro buscador PHP
       $buscar = $_POST["palabra"];
 
       $consulta_mysql= mysql_query ("SELECT * FROM usuarios WHERE id_usuario like '%$buscar%'");
 
       while($registro = mysql_fetch_assoc($consulta_mysql)) 
       {
           ?> 
           <tr>
               <!--mostramos el nombre y apellido de las tuplas que han coincidido con la 
               cadena insertada en nuestro formulario-->
               <td class="estilo-tabla" align="center"><?=$registro['nombre_producto']?></td>
               <td class=”estilo-tabla” align="center"><?=$registro['id_producto']?></td>
           </tr> 
           <?php 
       } //fin blucle
    ?>
    </table>
    <?php
} // fin if 
?>

