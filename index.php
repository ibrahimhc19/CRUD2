<?php

include_once "conexion.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CRUD PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./styles.css">
</head>

<script src="./confirmar.js"></script>

<body class="bg-light">



  <div class="container-fluid">
    <div class="row ">

      <div class="table-responsive col-10 mx-auto d-flex flex-column mt-5">
              <h1 class="text-center mb-5">CRUD PHP AJAX</h1>
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
                    <th scope="col"><input class="form-control" type="text" id="nombre" /></th>
                    <th scope="col"><input class="form-control" type="text" id="apellido" /></th>
                    <th scope="col"><input class="form-control" type="email" id="correo" /></th>
                    <th scope="col"><input class="form-control" type="tel" id="telefono" /></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>

                  <tbody id="cuerpoTabla">


                  </tbody>

              </table>


      </div>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="modalActualizar" tabindex="-1" aria-labelledby="modalActualizarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-center w-100" id="modalActualizarLabel">Actualizar Contacto</h1>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!--Formulario -->
        <form action="insertar.php" method="get" class="tarjeta d-flex flex-column  mx-auto">
          <!-- <h4 class="text-center">Contacto</h4> -->
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

        </form>
        <!--Formulario -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./jquery.js"></script>
  <script src="./funciones.js"></script>
</body>

</html>