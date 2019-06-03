<?php
 
$usuario = $_POST['nnombre'];
$pass = $_POST['npassword'];
 
if(empty($usuario) || empty($pass)){
header("Location: index.html");
exit();
}
 
mysql_connect('localhost','root','') or die("Error al conectar " . mysql_error());
mysql_select_db('videojuegos') or die ("Error al seleccionar la Base de datos: " . mysql_error());
 
$result = mysql_query("SELECT * from usuarios where id_usuario='" . $usuario . "contrasenna'" .$pass);
 
if($row = mysql_fetch_array($result)){
if($row['Password'] == $pass){
session_start();
$_SESSION['usuario'] = $usuario;
header("Location: contenido.php");
}else{
header("Location: index.html");
exit();
}
}else{
header("Location: index.html");
exit();
}

?>