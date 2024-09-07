function confirmar() {
  let conf = confirm("¿Estas seguro que deseas eliminar?");
  if (conf == true) {
    return true;
  } else {
    return false;
  }
}