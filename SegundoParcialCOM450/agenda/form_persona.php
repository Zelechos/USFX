<!DOCTYPE html>
<html>
<head>
	<title>Registrar Datos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Agenda</h1>
    	<input type="text" name="name" placeholder="Nombre">
		<input type="text" name="lastname" placeholder="Apellido">
		<input type="number" name="phone" placeholder="Celular">
    	<input type="text" name="direccion" placeholder="Direccion">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>