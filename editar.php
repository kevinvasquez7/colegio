<?php

 require_once "conexion.php";
 $c= new Conexion();
 $con=$c->conectar();
 $id=$_GET['id'];
 $sql="SELECT * from estudiantes_col where id_estudiante='$id'";
 $resul=mysqli_query($con,$sql);
 $ver=mysqli_fetch_row($resul);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="plugins/sweetAlert2/sweetalert2.min.css">  
    <script src="https://kit.fontawesome.com/1642a37bb8.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="plugins/animate.css/animate.css">  
	<link rel="stylesheet" href="estilos.css">
    <title>Crud</title>
        
  </head>
  <body>
    
      <!-- NAVBAR-->
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CRUD</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="principal.php">INICIO</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="button">Agregar</button>
        </form>
      </div>
    </div>
  </nav>
  <br><br>
       <!-- NAVBAR-->
       <div class="titulo">
      <h1>BIENVENIDO</h1>
      </div>
      <br>
      <!-- FORMULARIO-->
      <div class="col-md-4 ">
          
              <div class="card card-body ">
              <form  id="form" action="procesos/actualizar.php" method="POST" >
                <h5 class="tex-formulario">FORMULARIO</h5>
                <br>
                  <div class="form-goup">
                      <input type="text" name="id_e" class="form-control" placeholder="ID" value="<?php echo $ver[0]?>"autofocus required readonly >
                  </div>
                  <br>
                  <div class="form-goup">
                      <input type="text" name="nombre" class="form-control" placeholder="NOMBRE" value="<?php echo $ver[1]?>" autofocus required>
                  </div>
                  <br>
                  <div class="form-goup">
                      <input type="text" name="apellido" class="form-control" placeholder="APELLIDO" value="<?php echo $ver[2]?>" autofocus required>
                  </div>
                  <br>
                  <div class="form-goup">
                      <input type="text" name="direccion" class="form-control" placeholder="DIRECCION" value="<?php echo $ver[3]?>" autofocus required>
                  </div>
                  <br>
                  <div class="form-goup">
                      <input type="number" name="telefono" class="form-control" placeholder="TELEFONO" value="<?php echo $ver[4]?>" autofocus required>
                  </div>
                  <br>
                  <div class="form-goup">
                      <input type="number" name="acudiente" class="form-control" placeholder=" CC ACUDIENTE" value="<?php echo $ver[5]?>" autofocus required>
                  </div>
                  <br>
                  <div class="form-goup">
                      <input type="text" name="grupo" class="form-control" placeholder="GRUPO" value="<?php echo $ver[6]?>" autofocus required>
                  </div>
                  <br>
                  <div class="d-grid gap-2 col-6 mx-auto">
                    <button id="btn2"  class="btn btn-dark" type="submit">Actualizar</button>
                   
                  </div>
              </form>
              </div>
          </div>
          
     
          <!-- FORMULARIO-->
          <br>
          <br>
          <!-- FOOTER-->
  
          <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>
  
        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">Crud con php orientados a objetos</a>
    </div>
    <!-- Copyright -->
  </footer>
      <!-- FOOTER-->
      
    <script src="jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="popper/popper.min.js"></script>	 	 	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	  
    <!--    Plugin sweet Alert 2  -->
	<script src="plugins/sweetAlert2/sweetalert2.all.min.js"></script>
      
    <script src="codigo.js"></script> 	  
	
  </body>
</html>