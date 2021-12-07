function actualizar(){

  Swal.fire({
    title: 'ACTUALIZADO CON EXITO',
    icon: 'success',
    allowOutsideClick: false,
    allowEscapeKey: false,
    allowEnterKey: false
    
  }).then((result) => {
    if (result.value) {
      window.location.href = `../index.php`
    }
  });
}
function errorActualizar(){

  Swal.fire({
    title: 'NO SE PUDO ACTUALIZAR',
    icon: 'error',
    allowOutsideClick: false,
    allowEscapeKey: false,
    allowEnterKey: false
    
  }).then((result) => {
    if (result.value) {
      window.location.href = `../index.php`
    }
  });

}
function agregado(){
  Swal.fire({
    title: 'AGREGADO CON EXITO',
    icon: 'success', 
    allowOutsideClick: false,
    allowEscapeKey: false,
    allowEnterKey: false
    
  }).then((result) => {
    if (result.value) {
      window.location.href = `../index.php`
    }
  });
}

function agregadoError(){

  Swal.fire({
    title: 'NO SE PUDO AGREGAR',
    icon: 'error',
    allowOutsideClick: false,
    allowEscapeKey: false,
    allowEnterKey: false
    
  }).then((result) => {
    if (result.value) {
      window.location.href = `../index.php`
    }
  });
}
function eliminado(){

  Swal.fire({
    title: 'ELIMINADO CON EXITO',
    icon: 'success',
    allowOutsideClick: false,
    allowEscapeKey: false,
    allowEnterKey: false
    
  }).then((result) => {
    if (result.value) {
      window.location.href = `../index.php`
    }
  });
}
function eliminadoError(){

  Swal.fire({
    title: 'NO SE PUDO ELIMINAR',
    icon: 'error',
    allowOutsideClick: false,
    allowEscapeKey: false,
    allowEnterKey: false
    
  }).then((result) => {
    if (result.value) {
      window.location.href = `../index.php`
    }
  });
}


