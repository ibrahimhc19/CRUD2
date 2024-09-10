<?php

include_once "conexion.php";
$conexion = conexion();

extract($_POST);

if (isset($_POST['sendNombre']) && isset($_POST['sendApellido']) && isset($_POST['sendCorreo']) && isset($_POST['sendTelefono'])) {

  $sql = "INSERT INTO agenda_contactos(nombre,apellido,correo,telefono) VALUES ('$sendNombre', '$sendApellido','$sendCorreo', '$sendTelefono')";
  $query = mysqli_query($conexion, $sql);
}
