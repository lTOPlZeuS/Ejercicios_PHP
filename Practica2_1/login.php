<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="css/master.css" />
  </head>
  <body>
    <div class="login-box">
      <h1>Login</h1>
      <form action="valida.php" method="GET">
        <!-- USERNAME INPUT -->
        <label for="username">Numero de cuenta</label>
        <input type="text" name="numcuenta" />
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" name="password" />
        <input type="submit" value="Entrar" />
      </form>
    </div>
  </body>
</html>
