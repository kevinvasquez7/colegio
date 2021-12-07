<?php

    require_once "../conexion.php";
    require_once "../metodos.php";

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $acudiente=$_POST['acudiente'];
    $grupo=$_POST['grupo'];

    $datos=array($nombre,$apellido,$direccion,$telefono,$acudiente,$grupo);
    $obj=new metodos();
    if($obj->insertarDatos($datos)==1){
?>
       
      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="../estilos.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
          <script src="../main.js"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="../node_modules/sweetalert2/dist/sweetalert2.min.css"></script>
      </head>
      <body>
          
           <script>
               agregado();
               
               
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
               agregadoError();
               
           </script>

           
      </body>
      </html>
<?php        
    }
?>   

