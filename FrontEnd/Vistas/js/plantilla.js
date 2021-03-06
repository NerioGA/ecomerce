
$('[data-toggle = "tooltip"]').tooltip();


/*=================================
=            PLANTILLA            =
=================================*/

$.ajax(
	{
		url:"Ajax/PlantillaAjax.php",
		success: function( respuesta ){
			
			var colorFondo = JSON.parse(respuesta).colorFondo;
			var colorTexto = JSON.parse(respuesta).colorTexto;
			var barraSuperior = JSON.parse(respuesta).barraSuperior;
			var textoSuperior = JSON.parse(respuesta).textoSuperior;

			$(".backColor, .backColor a").css({"background": colorFondo, "color": colorTexto});
			$(".barraSuperior, .barraSuperior a").css({"background": barraSuperior, "color": textoSuperior});
		}
	});

/*=====  End of PLANTILLA  ======*/

/*==================================================
=            PRODUCTOS CUADRICULA LISTA            =
==================================================*/
var btnList = $(".btnList");

$('.btnList, .btnGrid').on('click', function(){

	var idListado = $(this).attr("id");

	var sss = idListado.substr(idListado.length-1);

	//console.log(sss);
	//for (var i = btnList.length - 1; i >= 0; i--) {
		if(idListado.indexOf('Grid')> -1){
			var valorDisplay = $('.grid'+sss).css("display");
				if(valorDisplay == 'none'){
				$('.grid'+sss).css({"display":"block"});
				$('.list'+sss).css({"display":"none"});

				$('#btnGrid'+sss).addClass('backColor');
				$('#btnList'+sss).removeClass('backColor');

			}
		}
		else if(idListado.indexOf('List')> -1){
			var valorDisplay = $('.list'+sss).css("display");
				if(valorDisplay == 'none'){
				$('.grid'+sss).css({"display":"none"});
				$('.list'+sss).css({"display":"block"});

				$('#btnGrid'+sss).removeClass('backColor');
				$('#btnList'+sss).addClass('backColor');
			}
		}
	//}
	});

/*=====  End of PRODUCTOS CUADRICULA LISTA  ======*/

/*======================================
=            EFECTOS SCROLL            =
======================================*/
$(window).scroll(function(){

	var scrollY = window.pageYOffset;

	if(window.matchMedia("(min-width:768px)").matches){
		if(scrollY < ( $(".banner").offset().top)-200){
			$('.banner img').css({"margin-top":-scrollY/2+"px"});
		}
		else{
			scrollY = 0;
		}
	}
});
/*=====  End of EFECTOS SCROLL  ======*/


// $.scrollUp({
// 	scrollText :"",
// 	scrollSpeed:200,
// 	easingType:"easeOutQuint"
// });

// $(function(){
// 	 $.scrollUp({
// 	 scrollText:"",
// 	 scrollSpeed: 10,
// 	 easingType: "easeOutQuint"
// 	 });
// });
