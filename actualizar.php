<?php

include_once "conexion.php";
$conexion = conexion();

extract($_POST);

if (!empty($_POST['newNombre']) && !empty($_POST['newApellido']) && !empty($_POST['newCorreo']) && !empty($_POST['newTelefono'])) {

  $sql = "UPDATE agenda_contactos SET nombre='$newNombre', apellido='$newApellido', correo='$newCorreo', telefono='$newTelefono' WHERE id=$editId";
  $query = mysqli_query($conexion, $sql);
} 