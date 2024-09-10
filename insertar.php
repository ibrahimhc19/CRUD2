<?php

include_once "conexion.php";
$conexion = conexion();

extract($_POST);

if (!empty($_POST['sendNombre']) && !empty($_POST['sendApellido']) && !empty($_POST['sendCorreo']) && !empty($_POST['sendTelefono'])) {

  $sql = "INSERT INTO agenda_contactos(nombre,apellido,correo,telefono) VALUES ('$sendNombre', '$sendApellido','$sendCorreo', '$sendTelefono')";
  $query = mysqli_query($conexion, $sql);
}
