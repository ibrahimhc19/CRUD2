<?php

include_once "conexion.php";
$conexion = conexion();

extract($_POST);

if (!empty($_POST['sendNombre']) && !empty($_POST['sendApellido']) && !empty($_POST['sendCorreo']) && !empty($_POST['sendTelefono'])) {

  $sql = "UPDATE agenda_contactos SET nombre=$sendNombre, apellido=$sendApellido, correo=$sendCorreo, telefono=$sendTelefono) WHERE id=$id";
  $query = mysqli_query($conexion, $sql);
}
