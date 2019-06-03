<html>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo2.ico">
<head>
 <title>Registrar Usuario</title>
 <meta charset = "utf-8">
</head>
<body>
 <header>
 <h1>Create una cuenta</h1>
 </header> 
 <form action="validar2.php" method="post"> 
 <hr />
 <!--Nombre Usuario-->
 <label for="nombre">Nombre de Usuario:</label><br>

 <input type="text" name="username" maxlength="32" required>
 <br/><br/>

 <!--Password-->

 <label for="pass">Password:</label><br>

 <input type="password" name="password" maxlength="8" required>
 <br>
 <br>
 <input type="submit" name="submit" value="Registrarme">
 <input type="reset" name="clear" value="Borrar">
 </form>
 </body>
</html>



<style>
    button{
        float: left;
        width:70px; 
        height:50px;
    }
</style>
