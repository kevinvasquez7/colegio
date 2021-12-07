<?php

class Conexion {

		private $servidor="localhost";
		private $usuario="root";
		private $bd="colegio-pru";
		private $password="";

		public function conectar(){

			$conectar=mysqli_connect($this->servidor,$this->usuario,$this->password,$this->bd);

			return $conectar;


		}


}
/*
$obj= new Conexion();
if($obj->conectar()){
	echo"CONECTADO";
}else{
	echo"NO SE PUDO CONECTAR";
}
*/


?>