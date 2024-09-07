<?php
$id = $_GET['id'];
include_once "conexion.php";

$conexion = conexion();
$sql="DELETE FROM agenda_contactos WHERE id=$id";

$query = mysqli_query($conexion,$sql);
if($query){
    header("refresh:0;url=index.php");
}else{
    echo "Error al eliminar";
}
?>