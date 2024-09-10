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