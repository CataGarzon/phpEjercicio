<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Suma</title>
</head>
<center>
<body>
<form method="POST">
    <h1>multiplicacion</h1>
		<label>Primer número:</label><br>
		<input type="number" name="numero1"><br>

		<label>Segundo número:</label><br>
		<input type="number" name="numero2"><br>
        <br>
		<input type="submit" name="sumar" value="Sumar">
	</form>
</body>
</html>
<br>
<?php
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$suma = $numero1 * $numero2;

echo "El resultado de la resta es: " . $suma;
?>
<center>