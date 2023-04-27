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
        <!-- estas seran las opciones a elegir y cada una tiene un numero-->

    <li>1. Datos de usuario</li>
    <li>2. Suma</li>
    <li>3. Resta</li>
    <li>4. Multiplicación</li>
    <li>5. División</li>

    </ul>
    <form action="" method="post">
        <p>Ingrese la opción a procesar:</p>
        <!-- aqui ingresaremos el numero de la opcion en el input -->
        <input id="entrada" type="number" name="opt" id="opt"><br><br>
        <button id="botonSesion" type="submit">ingresar</button>
    </form>
</div>


</body>
<center>
     
</html>
<?php
    //creo una variable llamada opt la cual sera para la opcion que el usuario digite
$opt=$_POST['opt'];
    // por medio de un switch validaremos el numero que se ingreso en el input, si este es valido se ira al formulario de la opcion que se eligio.
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
       //en caso de que el numero que ingreso sea invalido se le enseñara este mensaje:
echo"por favor selecione una opcion valida";
break;
}
    // este echo es para enseñar por medio de una etiqueta h1 la opcion seleccionada si es invalida
echo "<h1>".$opt."</h1>";
