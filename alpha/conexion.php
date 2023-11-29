<?php
$host = "localhost"; //host donde esta el SGBD
$usuario = "root"; //usuario del SGBD
$password = ""; // password del SGBD
$nombrebd = "alpha";
$conectar = new mysqli ($host, $usuario, $password,$nombrebd);

// Check connection
if ($conectar->connect_error) {
    die("Connection failed: " . $conectar->connect_error);
}else {
echo "Connected successfully BD <br />";
}
?>