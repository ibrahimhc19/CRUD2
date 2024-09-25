<?php

include_once "conexion.php";

$conexion = conexion();
$id = $_POST['id'];
$sql = "SELECT nombre, apellido, correo, telefono FROM agenda_contactos WHERE id=$id";

$query = mysqli_query($conexion, $sql);

$row = mysqli_fetch_assoc($query);
$nombre = $row['nombre'];
$apellido = $row['apellido'];
$correo = $row['correo'];
$telefono = $row['telefono'];

echo '

        <form class="tarjeta d-flex flex-column  mx-auto">
          <div class="mb-3 w-75 mx-auto">
            <label for="editarNombre" class="form-label">Nombre:</label>

            <input type="hidden" class="form-control" id="editarId" name="editId" value="'.$id.'">

            <input type="text" class="form-control" id="editarNombre" name="nombre" value="'.$nombre.'">
          </div>
          <div class="mb-3 w-75 mx-auto">
            <label for="editarApellido" class="form-label">Apellido:</label>
            <input type="text" class="form-control" id="editarApellido" name="apellido" value="'.$apellido.'">
          </div>
          <div class="mb-3 w-75 mx-auto">
            <label for="editarCorreo" class="form-label">Correo Electrónico:</label>
            <input type="email" class="form-control" id="editarCorreo" name="correo" value="'.$correo.'">
          </div>
          <div class="mb-3 w-75 mx-auto">
            <label for="editarTelefono" class="form-label">Número Telefónico:</label>
            <input type="tel" class="form-control" id="editarTelefono" name="telefono" value="'.$telefono.'">
          </div>
        </form>

'
;

?>