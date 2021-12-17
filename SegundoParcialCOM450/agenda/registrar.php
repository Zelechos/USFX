<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['lastname']) >= 1  && $_POST['phone'] >= 1111111 && strlen($_POST['direccion']) >= 1) {

	    $name = trim($_POST['name']);
	    $lastname = trim($_POST['lastname']);
		$phone = trim($_POST['phone']);
		$direccion = trim($_POST['direccion']);

	    $consulta = "INSERT INTO datos(nombres, apellidos, celular, direccion) VALUES ('$name','$lastname','$phone','$direccion')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>