<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Basico</title>
</head>
<body>
    <form action="validar_usuario.php" method="post">
      <center>
        <table>
          <h1>inicio de sesión</h1>
            <h2>Inicio de Sesion</h2>
              <tr>
                <td>Usuario:</td>
                <td><input name="usuario" required="required" maxleght="50" type="text" /></td>
              </tr>
              <tr>
              	<td>Contraseña:</td>
                <td><input name="password" required="required" maxleght="50" type="password" /></td>
              </tr>
              <tr>
              	<td><a href="actualizar_contraseña.php" ><center>Olvido su contraseña</center></td>
                <td><a href="registrar.php" ><center>Registrarse</center></td>
              </tr>

              <tr>
                <td colspan="2" align="center">
                  <input name="iniciar" type="submit" value="Iniciar Sesión"/></td>
              </tr>
        </table>
      </center>
     </form>
</body>
</html>