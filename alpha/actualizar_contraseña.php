<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>actualizar contraseña</title>
</head>
<body>    
	<form action="cambiar_contraseña.php" method="post">
      <center>
        <table>
          <h1>inicio de sesión</h1>
            <tr>
                <td>Usuario:</td>
                <td><input name="usuario" required="required" maxleght="50" type="text" /></td>
            </tr>
            <tr>
                <td>Nueva Contraseña:</td>
                <td><input name="password" required="required" maxleght="50" type="text" /></td>
            </tr>
              <tr>
                <td colspan="2" align="center">
                  <input name="iniciar" type="submit" value="cambiar contraseña"/></td>
              </tr>
        </table>
      </center>
     </form>
</body>
</html>