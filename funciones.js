function agregar(){
  let addNombre = $('#nombre').val();
  let addApellido = $('#apellido').val();
  let addCorreo = $('#correo').val();
  let addTelefono = $('#telefono').val();


  $.ajax({
    url: "insertar.php",
    type: "post",
    data: {
      sendNombre: addNombre,
      sendApellido: addApellido,
      sendCorreo: addCorreo,
      sendTelefono: addTelefono
    },
    success: function(data, status){
      mostrar()
    }
  })
  $('#nombre').val('');
  $('#apellido').val('');
  $('#correo').val('');
  $('#telefono').val('');

}

$(document).ready(function() {
  mostrar()
})

function mostrar(){
  let mostrarDatos = "true";
  $.ajax({
    url: "leer.php",
    type: "post",
    data: {
      datos: mostrarDatos
    },
    success: function(data, status){
      $('#cuerpoTabla').html(data);
    }
  })
}


function eliminar(eliminarId) {
  let confirmacion = confirm("¿Estás seguro de que deseas eliminar este elemento?");
  
  if (confirmacion) {
    $.ajax({
      url: "eliminar.php",
      type: "post",
      data: {
        toDelete: eliminarId
      },
      success: function(data, status) {
        mostrar();
      }
    });
  }
}



function obtenerDatos(actualizarId){

  $.ajax({
    url: 'obtener.php', 
    type: "post",
    data: {
      toGet: actualizarId
    },    
    success: function(data, status) {
      
      var myModal = new bootstrap.Modal(document.getElementById('modalActualizar'));
      $('#cuerpoModal').html(data);
      myModal.show();
      
    }
  });
  
  
}