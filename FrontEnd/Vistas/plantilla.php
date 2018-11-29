<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

	<meta name="title" content="Tienda Virtual">

	<meta name="description" content="Lorem ipsum">

	<title>Tienda Virtual</title>
 
 	<!-- <base href="Vistas/"> -->
 	<?php 
 	   $icono = ControladorPlantilla::ctrEstiloPlantilla();
 	   echo '<link rel="icon" href="http://localhost/BackEnd/'.$icono["icono"].'">';

 	   /*=====================================================
 	   =            MANTENER LA RUTA DEL PROYECTO            =
 	   =====================================================*/
 	   $url =  Ruta::ctrRuta();
 	 ?>
 	

	<link rel="stylesheet" type="text/css" href="<?php echo $url;?>Vistas/css/plugins/bootstrap.min.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="<?php echo $url;?>Vistas/css/plantilla.css?v=3">

	<link rel="stylesheet" type="text/css" href="<?php echo $url;?>Vistas/css/header.css?v=4">

	<link rel="stylesheet" type="text/css" href="<?php echo $url;?>Vistas/css/slide.css?v=2">

	<!-- <link rel="stylesheet" type="text/css"  href="Vistas/css/plugins/fontawesome.css"> -->

	<script src="<?php echo $url;?>Vistas/js/plugins/jquery.js"></script>
	<script src="<?php echo $url;?>Vistas/js/plugins/bootstrap.min.js"></script>
	<script src="<?php echo $url;?>Vistas/js/plugins/fontawesome.min.js"></script> 

</head>
<body>

<?php 

	/*=============================================
	=            Section comment block            =
	=============================================*/
	
	include "modulos/Head.php";
	
	
	/*=====  End of Section comment block  ======*/

	/*----------  CONTENIDO DINAMICO  ----------*/
	
	$rutas = array();

	$ruta = null;

	if(isset($_GET["ruta"]))
	{
		$rutas = explode("/",$_GET["ruta"]);

		$item = "ruta";

		$valor = $rutas[0];

		/*----------  URL AMIGABLE DE CATEGORIA  ----------*/
		$rutaCategorias = ControladorProductos::crtMostrarCategorias($item, $valor);

		if($rutas[0] == $rutaCategorias["ruta"]){
			$ruta = $rutas[0];
		}

		/*----------  URL AMIGABLE DE SUBCATEGORIA  ----------*/
		$rutaSubCategorias = ControladorProductos::crtMostrarSubCategorias($item, $valor);

		foreach ($rutaSubCategorias as $key => $value) {
			if($rutas[0] == $value["ruta"]){
			$ruta = $rutas[0];
			}
		}

		/*----------  LISTA  BLANCA DE URLS AMIGABLES  ----------*/
		if($ruta != null){
			include "modulos/productos.php";
		}
		else{
			include "modulos/error404.php";
		}
	}
	else{
		include "modulos/slide.php";
	}
 ?>


<!--==========================================
=            LLAMADA A JAVASCRIPT            =
===========================================-->

   	<script src="<?php echo $url;?>Vistas/js/header.js?v=1"></script>	
	 				
	<script src="<?php echo $url;?>Vistas/js/plantilla.js?v=1"></script>	

	<script src="<?php echo $url;?>Vistas/js/slide.js?v=2"></script> 

<!--====  End of LLAMADA A JAVASCRIPT  ====-->

</body>
</html>