<?php 

require_once "Conexion.php";

/**
 * CLASE PARA TRAER DATOS PARA LA PLANTILLA
 */
	class ModeloPlantilla
	{
		
		static public function mdlEstiloPlantilla($tabla){
			$stmt = Conexion::conectar()->prepare("SELECT *FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetch();

			$stmt -> close();
		}
	}

 ?>