<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nuevo Registro</title>
</head>
<body>
	<body>
    <form action="registrar_usuario.php" method="post">
      <center>
        <table>
          <h1>Registrar Usuario</h1>
              <tr>
                <td>Usuario:</td>
                <td><input name="usuario" required="required" maxleght="50" type="text" /></td>
              </tr>
              <tr>
              	<td>Contraseña:</td>
                <td><input name="password" required="required" maxleght="50" type="password" /></td>
              </tr>
              <tr>
                <td colspan="2" align="center">
                  <input name="iniciar" type="submit" value="guardar"/></td>
              </tr>
        </table>
      </center>
     </form>
</body>

</body>
</html>