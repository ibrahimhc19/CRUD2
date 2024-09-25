function agregar() {
  let addNombre = $("#nombre").val();
  let addApellido = $("#apellido").val();
  let addCorreo = $("#correo").val();
  let addTelefono = $("#telefono").val();

  $.ajax({
    url: "insertar.php",
    type: "post",
    data: {
      sendNombre: addNombre,
      sendApellido: addApellido,
      sendCorreo: addCorreo,
      sendTelefono: addTelefono,
    },
    success: function (data, status) {
      mostrar();
    },
  });
  $("#nombre").val("");
  $("#apellido").val("");
  $("#correo").val("");
  $("#telefono").val("");
}

$(document).ready(function () {
  mostrar();
});

function mostrar() {
  let mostrarDatos = "true";
  $.ajax({
    url: "leer.php",
    type: "post",
    data: {
      datos: mostrarDatos,
    },
    success: function (data, status) {
      $("#cuerpoTabla").html(data);
    },
  });
}

function eliminar(eliminarId) {
  let confirmacion = confirm(
    "¿Estás seguro de que deseas eliminar este elemento?"
  );

  if (confirmacion) {
    $.ajax({
      url: "eliminar.php",
      type: "post",
      data: {
        toDelete: eliminarId,
      },
      success: function (data, status) {
        mostrar();
      },
    });
  }
}

function obtenerDatos(userId) {
  $.ajax({
    url: "obtener.php",
    type: "post",
    data: { id: userId },
    success: function (data, status) {
      $("#modalActualizar .modal-body").html(data);
      let modalEdicion = new bootstrap.Modal(document.getElementById("modalActualizar"));
      modalEdicion.show();
      $("#modalActualizar").modal("show");
    },
  });
}

$("#guardarCambios").on("click", function () {
  let userId = $("#editarId").val();
  let updateNombre = $("#editarNombre").val();
  let updateApellido = $("#editarApellido").val();
  let updateCorreo = $("#editarCorreo").val();
  let updateTelefono = $("#editarTelefono").val();

  $.ajax({
    url: "actualizar.php",
    type: "post",
    data: {
      editId: userId,
      newNombre: updateNombre,
      newApellido: updateApellido,
      newCorreo: updateCorreo,
      newTelefono: updateTelefono,
    },
    success: function (data, status) {
      $("#modalActualizar").modal("hide");
      mostrar();
    },
  });
});
