<?php

include_once "conexion.php";

$conexion = conexion();

$sql = "SELECT * FROM agenda_contactos";

$query = mysqli_query($conexion, $sql);

if ($query) {

  $contador = 1;

  while ($row = mysqli_fetch_assoc($query)) {
    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $correo = $row['correo'];
    $telefono = $row['telefono'];
    $id = $row['id'];
    echo '<tr>
              <td scope="row" class="text-center">'.$contador.'</td>
              <td scope="row">'.$nombre.'</td>
              <td scope="row">'.$apellido.'</td>
              <td scope="row">'.$correo.'</td>
              <td scope="row">'.$telefono.'</td>
              <td scope="row"><button class="btn btn-info" data-id="'.$id.'" onclick="actualizar()">Editar</button></td>
              <td scope="row"><button type="button" class="btn btn-info" data-id="'.$id.'" data-bs-toggle="modal" data-bs-target="#modalActualizar" onclick="obtenerDatos()">Actualizar</button></td>
              <td scope="row"><button class="btn btn-danger" onclick="eliminar('.$id.')">Eliminar</button></td>
            </tr>';
    $contador++;
  }
}
?>
