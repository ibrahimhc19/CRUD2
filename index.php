<?php

include_once "conexion.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CRUD PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="./styles.css">
</head>
<script src="./confirmar.js"></script>

<body class="bg-light">



  <div class="container-fluid">
    <div class="row ">
      <div class="altura">


        <div class="row bg-warning border rounded-4">

          <!--Formulario -->
          <form action="insertar.php" method="get" class="tarjeta d-flex flex-column ancho">
            <h4 class="text-center pt-5">Contacto</h4>
            <div class="mb-3 w-75 mx-auto">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="mb-3 w-75 mx-auto">
              <label for="apellido" class="form-label">Apellido:</label>
              <input type="text" class="form-control" id="apellido" name="apellido">
            </div>
            <div class="mb-3 w-75 mx-auto">
              <label for="correo" class="form-label">Correo Electrónico:</label>
              <input type="email" class="form-control" id="correo" name="correo">
            </div>
            <div class="mb-3 w-75 mx-auto">
              <label for="telefono" class="form-label">Número Telefónico:</label>
              <input type="tel" class="form-control" id="telefono" name="telefono">
            </div>
            <div class="mb-3 w-75 mx-auto justify-content-center d-flex">
              <button type="submit" class="btn btn-primary mx-auto mt-3 mb-4" id="agregar">Agregar Contacto</button>
            </div>
          </form>
          <!--Formulario -->
        </div>
        
      </div>
      <div class="table-responsive col-8 mx-auto">
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <table class="table table-striped">
        
        
        
        <?php
        $con = conexion();
        $sql = "SELECT * FROM agenda_contactos";
        $query = mysqli_query($con, $sql);
        if ($query) {
          $contador = 1;
          while ($row = mysqli_fetch_assoc($query)) {
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
            $correo = $row['correo'];
            $telefono = $row['telefono'];
            $id = $row['id'];
            ?>


            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Correo</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Actualizar</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>


            <tbody>
              <tr>
                <td scope="row"><?php echo $contador; ?></td>
                <td scope="row"><?php echo $nombre; ?></td>
                <td scope="row"><?php echo $apellido; ?></td>
                <td scope="row"><?php echo $correo; ?></td>
                <td scope="row"><?php echo $telefono; ?></td>
                <td scope="row"><a><button class="btn btn-info" data-id="<?php echo $id;?>">Editar</button></a></td>
                <td scope="row"><a href="eliminar.php?id=<?php echo $id; ?>"><button class="btn btn-danger" onclick="return confirmar()">Eliminar</button></a></td>
              </tr>

          <?php

            $contador++;
          }
        }
          ?>


            </tbody>
      </table>
      </div>
    </div>
  </div>




<script src="./jquery.js"></script>
<script src="./funciones.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>