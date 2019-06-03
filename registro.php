<?php 
	
	/*Datos de Conexión BD*/
	$host_db	= 	"localhost";
	$user_bd	=	"root";
	$pass_db	=	"root";
	$db_name	=	"formulario";
	$tbl_name	=	"usuarios";

	/*Conexión*/
	$conexion = new mysqli($host_db, $user_bd, $pass_db, $db_name);

	if ($conexion->connect_error) {
		die("La Conexión Fallo:" .$conexion->connect_error);
	}
	/*Fin datos de conexion*/

	/*Datos enviados del formulario*/
		$nombre = $_POST[nombre];
		$email = $_POST[email];
		$mensaje = $_POST[mensaje];

	//print_r("Nombre: ".$nombre." Email: ".$email." Mensaje: ".$mensaje);
		$query = "INSERT INTO usuarios (nombre, email, mensaje)
           VALUES ('$nombre', '$email', '$mensaje')";

    if ($conexion->query($query) === TRUE) {
	    echo "<br />" . "<h2>" . "Datos enviados Exitosamente!" . "</h2>";
	 	echo "<h4>" . "Nombre: " . $nombre . "</h4>" . "\n\n";
	 	echo "<h4>" . "email: " . $email . "</h4>" . "\n\n";
	 	echo "<h4>" . "mensaje: " . $mensaje . "</h4>" . "\n\n";
 	}
 mysqli_close($conexion);



 ?>