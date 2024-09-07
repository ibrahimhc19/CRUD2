<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$correo = $_GET['correo'];
$telefono = $_GET['telefono'];

include_once "conexion.php";

$conexion = conexion();

$sql="UPDATE agenda_contactos SET nombre='$nombre', apellido='$apellido', correo='$correo', telefono='$telefono'
 where id=$id";
$query=mysqli_query($conexion,$sql);
if($query){
    header("refresh:0;url=index.php");
}
?>