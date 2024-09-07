<?php
include_once "conexion.php";
$con = conexion();

$id = $_GET['id'];

$sql="SELECT * FROM agenda_contactos where id=$id";
$query =mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($query);
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
          <form action="actualizar.php" method="get" class="tarjeta d-flex flex-column ancho">
            <h4 class="text-center pt-5">Actualizar Contacto</h4>
            <div class="mb-3 w-75 mx-auto">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>">
            </div>
            <div class="mb-3 w-75 mx-auto">
              <label for="apellido" class="form-label">Apellido:</label>
              <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $row['apellido'] ;?>">
            </div>
            <div class="mb-3 w-75 mx-auto">
              <label for="correo" class="form-label">Correo Electrónico:</label>
              <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $row['correo'] ;?>">
            </div>
            <div class="mb-3 w-75 mx-auto">
              <label for="telefono" class="form-label">Número Telefónico:</label>
              <input type="tel" class="form-control" id="telefono" name="telefono" value="<?php echo $row['telefono'] ;?>">
              <input hidden name="id" type="number" class="form-control" value="<?= $row['id'] ?>">
            </div>
            <div class="mb-3 w-75 mx-auto justify-content-center d-flex">
              <button type="submit" class="btn btn-primary mx-auto mt-3 mb-4" id="actualizar">Actualizar
                contacto</button>
            </div>
          </form>
          <!--Formulario -->

        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
          crossorigin="anonymous"></script>
</body>

</html>