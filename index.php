<?php

include_once "conexion.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CRUD PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="./styles.css">
</head>

<script src="./confirmar.js"></script>

<body class="bg-light">



  <div class="container-fluid">
    <div class="row ">

    <div class="table-responsive col-10 mx-auto d-flex flex-column mt-5">
        <h1 class="text-center">CRUD PHP AJAX</h1>
        <div>

      </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col" class="text-center">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Correo</th>
              <th scope="col">Teléfono</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tr>
            <th scope="col"><button class="btn btn-success fw-bold" onclick="agregar()"><svg xmlns="http://www.w3.org/2000/svg" height="16" fill="currentColor" class="bi bi-floppy"
            viewBox="0 0 16 16">
            <path d="M11 2H9v3h2z" />
            <path
            d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z" />
          </svg>
        </button></th>
            <th scope="col"><input class="form-control" type="text"  id="nombre"/></th>
            <th scope="col"><input class="form-control" type="text" id="apellido"/></th>
            <th scope="col"><input class="form-control" type="email" id="correo"/></th>
            <th scope="col"><input class="form-control" type="tel" id="telefono"/></th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>

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

          <tbody>
            <tr>
              <td scope="row" class="text-center">
                <?php echo $contador; ?>
              </td>
              <td scope="row">
                <?php echo $nombre; ?>
              </td>
              <td scope="row">
                <?php echo $apellido; ?>
              </td>
              <td scope="row">
                <?php echo $correo; ?>
              </td>
              <td scope="row">
                <?php echo $telefono; ?>
              </td>
              <td scope="row">
                <a><button class="btn btn-info" data-id="<?php echo $id; ?>">
                    Editar
                  </button></a>
              </td>
              <td scope="row">
                <a href="eliminar.php?id=<?php echo $id; ?>"><button class="btn btn-danger"
                    onclick="return confirmar()">
                    Eliminar
                  </button></a>
              </td>
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




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./jquery.js"></script>
  <script src="./funciones.js"></script>
</body>

</html>