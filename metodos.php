<?php

class metodos{

    // MOSTRAR DATOS
    public function mostrarDatos($sql){

        $c= new Conexion();
        $con=$c->conectar();

        $result=mysqli_query($con,$sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    // INSERTAR DATOS
    public function insertarDatos($datos){

        $c= new Conexion();
        $con=$c->conectar();
        $sql="INSERT into estudiantes_col (Nombre_estudiante,Apellido_estud,
        direccion_est,telefono_est,acudiente,grupo_est) values ('$datos[0]','$datos[1]','$datos[2]',
        '$datos[3]','$datos[4]','$datos[5]')";

        return $result=mysqli_query($con,$sql);
        
    }

    //  ACTUALIZAR DATOS
    public function actualizarDatos($datos){

        $c= new Conexion();
        $con=$c->conectar();
        $sql="UPDATE estudiantes_col set Nombre_estudiante='$datos[1]',
        Apellido_estud='$datos[2]', direccion_est='$datos[3]', telefono_est='$datos[4]', 
        acudiente='$datos[5]', grupo_est='$datos[6]' where id_estudiante='$datos[0]'";

        return $result=mysqli_query($con,$sql);
    }

    // ELIMINAR DATOS 
    public function eliminarDatos($id){

        $c= new Conexion();
        $con=$c->conectar();
        $sql="DELETE from estudiantes_col where id_estudiante='$id'";
        return $result=mysqli_query($con,$sql);
    }
}

?>