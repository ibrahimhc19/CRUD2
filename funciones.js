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
      console.log(status)
    }
  })


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
      console.log(status)
      // console.log(JSON.stringify(data))
    }
  })
}