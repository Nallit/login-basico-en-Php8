<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Validar Usuario</title>
</head>
<body>
	 <?php
     	include ("conexion.php");
        
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and password = '$password' ";
        $result = $conectar->query($sql);

        if ($result->num_rows > 0) {
            header("Location: menu.php");
        }else{
            echo "<script>alert('Usuaro o Clave Incorrecta');
                    location.href = 'index.php';
            </script>";
        }
     ?>


</body>
</html>