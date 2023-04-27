<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <link href="CSS/diseño.css" rel="stylesheet" type="text/css"/>

  </head>
  <center>
  <body id="login">
   
<div class="usuario">
    <h1>Iniciar sesión</h1>
    <form method="POST" action="login.php">
        
      <label for="username">Nombre de usuario:</label><br><br>
      <input id="entrada"type="text" id="username" name="username" required pattern="^[a-zA-Z]+$" ><br><br>
      <label for="password">Contraseña:</label><br><br>
      <input id="entrada"type="password" id="password" name="password" required pattern="^[a-zA-Z0-9]+$"><br><br>

      <input id="botonSesion" type="submit" value="Iniciar sesión"><br><br>

     
    </div>
  
    </form>

</body>
</center>
</html>
<?php


  // Datos de inicio de sesión
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Verificar credenciales
  if ($username === 'Aprendiz' && $password === 'Sena123') {
    // Iniciar sesión correctamente
    $_SESSION['username'] = $username;
    header('Location: ejercicio.php');
  } else {
    // Credenciales incorrectas
    echo 'El nombre de usuario o la contraseña son incorrectos';
  }
?>