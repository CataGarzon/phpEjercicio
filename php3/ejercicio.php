</html>
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <link href="CSS/diseño.css" rel="stylesheet" type="text/css"/>

  </head>
<center>
<body id="menubody">

<div class="menu">
    <h1 style="color:#ff33cc">Bienvenido</h1>
<ul>
    
    <li>1. Datos de usuario</li>
    <li>2. Suma</li>
    <li>3. Resta</li>
    <li>4. Multiplicación</li>
    <li>5. División</li>

    </ul>
    <form action="" method="post">
        <p>Ingrese la opción a procesar:</p>
        <input id="entrada" type="number" name="opt" id="opt"><br><br>
        <button id="botonSesion" type="submit">ingresar</button>
    </form>
</div>


</body>
<center>
</html>
<?php
$opt=$_POST['opt'];

switch($opt)
{
case '1':
header('location: formulario.php');
break;
case '2':
header('location: suma.php');
break;
case'3':
header('location: resta.php');
case'4':
header('location: multiplicacion.php');
break;
case'5':
header('location: division.php');
default:
echo"por favor seleciones una una opcion valida";
break;
}
echo "<h1>".$opt."</h1>";
