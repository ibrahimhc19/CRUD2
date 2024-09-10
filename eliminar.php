<?php

include_once "conexion.php";

$conexion = conexion();

$sql="DELETE FROM agenda_contactos WHERE id=$id";

$query = mysqli_query($conexion,$sql);

?>