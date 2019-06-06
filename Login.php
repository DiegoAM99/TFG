<html>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo2.ico">
<div class="container">
    <link href="Estilos/style2.css" rel="stylesheet"/>
  <form action="/action_page.php">
    <div class="row">
      <h2 style="text-align:center">Inicia Sesión/Registrate</h2>
      <div class="col">
        <a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i>Entrar con Facebook
        </a>
        <a href="#" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Entrar con Twitter
        </a>
        <a href="#" class="google btn">
          <i class="fa fa-google fa-fw"></i> Entrar con Google+
        </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>

        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login" src="index.php">
        <button type="submit" value="Login"><a href="index.php">Login</a></button>
      </div>

    </div>
  </form>
</div>

<div class="bottom-container">
  <div class="row">
    <div class="col">
        <a href="Registrar.php" style="color:white" class="btn">Sign up</a>
    </div>
    <div class="col">
        <a href="ContraseñaOlvidada.php" style="color:white" class="btn">Forgot password?</a>
    </div>
  </div>
</div>
</html>