<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		include "conexion.php";

		//Variables del formulario
		$usuario = $_POST['usuario'];
		$password = $_POST['password'];

		//consulta si el usuario ya esta registrado antes de guardarlo
		$sql = "SELECT usuario FROM usuarios where usuario = '$usuario' ";
		$resultado =$conectar->query($sql);

		if($resultado ->num_rows < 0) {
			echo "El usuario ingresado no esta registrado";
                    header("Location: index.php");
		}else{
			$sql = "UPDATE usuarios SET password ='$password' WHERE usuario = '$usuario' ";
				if(mysqli_query($conectar,$sql)) {
					echo "la contraseña ha sido actualizada";
					header("Location: index.php");

				}else{
					echo "Error: " . $Sql . "<br>" . mysqli_error($conn); 
				}
		}
	?>

</body>
</html>