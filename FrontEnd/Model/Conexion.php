<?php 

	/**
	 * 
	 */
	class Conexion
	{
		
		function __construct()
		{
			# code...
		}


		public function conectar(){

			$link = new PDO('mysql:host=localhost;dbname=ecomerce', "root", "",
				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			return $link;
		}
	}

 ?>