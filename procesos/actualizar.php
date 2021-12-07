<?php

    require_once "../conexion.php";
    require_once "../metodos.php";

    $id_e=$_POST['id_e'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $acudiente=$_POST['acudiente'];
    $grupo=$_POST['grupo'];

    $datos=array($id_e,$nombre,$apellido,$direccion,$telefono,$acudiente,$grupo);
    $obj=new metodos();
    if($obj->actualizarDatos($datos)==1){
?>
       
       
       <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <script src="../main.js"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.min.css"></script>
      </head>
      <body>
           <script>
               actualizar();
               
           </script>

           
      </body>
      </html>
      
        
      
<?php
    }else{
?>
         <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <script src="../main.js"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.min.css"></script>
      </head>
      <body>
           <script>
               actualizarError();
               
           </script>

           
      </body>
      </html>
<?php        
    }
?>     
