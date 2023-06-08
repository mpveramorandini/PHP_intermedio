<?php session_start(); $_SESSION["num1"] = rand(0,10); $_SESSION["num2"] =
rand(0,10); ?>
<!DOCTYPE html>
<html>
<head>
<title>Ejemplo de Captcha Matemático</title>
</head>
<body>
<h1>Ejemplo</h1>
<form method="post" action="solve.php">
Resuelve la siguiente operación <?php echo $_SESSION["num1"]; ?>+ <?php echo
$_SESSION["num2"];?>:
<input type="text" name="captcha" required>
<input type="submit" value="Enviar">
</form>
</body>
</html>