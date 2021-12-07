<?php

    require_once "../conexion.php";
    require_once "../metodos.php";

    $id=$_GET['id'];
    $obj=new metodos();
    if($obj->eliminarDatos($id)==1){
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
               eliminado();
               
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
               eliminadoError();
               
           </script>

           
      </body>
      </html>
<?php        
    }
?>   
