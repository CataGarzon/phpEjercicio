<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Usuarios</title>
    
</head>
<center>
<body>
   <div>
        <h1>Datos de usuario</h1>
        <form action="" method="post">
        <input type="text" name="nombre" id="" placeholder="Nombre usuario" required pattern="^[a-zA-Z]+$">
        <input type="number" name="telefono" id="" placeholder="Telefono usuario" required>
        <input type="text" name="email" id="" placeholder="Email usuario"required>
        <input type="text" name="direccion" id="" placeholder="Direccion usuario" required>
        <button type="submit">enviar</button>
        </form>
    </div>
 
</body>
</html>
<center>
<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];

echo "<br><hr><table>
<tr>
<td>Nombre</td>
<td>Telefono</td>
<td>Email</td>
<td>Direccion</td>
</tr>
<tr>
<td>".$nombre."</td>
<td>".$telefono."</td>
<td>".$email."</td>
<td>".$direccion."</td>
</tr>
</hr></table>";
?>