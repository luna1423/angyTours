$(document).ready(function() {

	/* ::::::::::::::::::::::::::::::::::::::::::: Ventas ::::::::::::::::::::::::::::::::::::::::::::::::::.*/
	
	$("#btn_ventas").click(function(event) {

		$("#menu_principal").hide();
		$("#menu_ventas").show();
		

		$.ajax("docs/venta.html").done(function(html){

			$("#contenido").html(html);

		});

		$("#btn_nueva_venta").click(function(event) {

			$.ajax("docs/nueva_venta.html").done(function(html){

			

			$("#contenido").html(html);

		});


			/* Act on the event */
		});
		$("#btn_abono").click(function(event) {

			$.ajax("docs/nuevo_abono.html").done(function(html){

			$("#contenido").html(html);

		});


			/* Act on the event */
		});
		$("#btn_borrar_venta").click(function(event) {

			$.ajax("docs/borrar_venta.html").done(function(html){

			$("#contenido").html(html);

		});


			/* Act on the event */
		});
		$("#btn_cupones").click(function(event) {

			$.ajax("docs/cupones_venta.html").done(function(html){

			$("#contenido").html(html);

		});


			/* Act on the event */
		});


		
	});
	/* ::::::::::::::::::::::::::::::::::::::::::: Grupos ::::::::::::::::::::::::::::::::::::::::::::::::::.*/
	$("#btn_grupos").click(function(event) {

		$("#menu_principal").hide();
		$("#menu_grupo").show();

		$.ajax("docs/grupo.html").done(function(html){

			$("#contenido").html(html);

		});

		$("#btn_nuevo_grupo").click(function(event) {

			$.ajax("docs/nuevo_grupo.html").done(function(html){

			$("#contenido").html(html);

		});


			/* Act on the event */
		});
		$("#btn_abono_grupo").click(function(event) {

			$.ajax("docs/abono_grupo.html").done(function(html){

			$("#contenido").html(html);

		});


			/* Act on the event */
		});
		$("#btn_borrar_grupo").click(function(event) {

			$.ajax("docs/borrar_grupo.html").done(function(html){

			$("#contenido").html(html);

		});


			/* Act on the event */
		});
		$("#btn_cupones_grupo").click(function(event) {

			$.ajax("docs/cupones_grupo.html").done(function(html){

			$("#contenido").html(html);

		});


			/* Act on the event */
		});


		
	});
	/* ::::::::::::::::::::::::::::::::::::::::::: Pagos ::::::::::::::::::::::::::::::::::::::::::::::::::.*/
	/* ::::::::::::::::::::::::::::::::::::::::::: Promociones ::::::::::::::::::::::::::::::::::::::::::::::::::.*/
	/* ::::::::::::::::::::::::::::::::::::::::::: Catalogo ::::::::::::::::::::::::::::::::::::::::::::::::::.*/
	/* ::::::::::::::::::::::::::::::::::::::::::: Usuario ::::::::::::::::::::::::::::::::::::::::::::::::::.*/
	/* ::::::::::::::::::::::::::::::::::::::::::: Bitacora ::::::::::::::::::::::::::::::::::::::::::::::::::.*/

		$("#btn_regresar_menu").click(function(event) {

			$(".menus").hide();
			$("#menu_principal").show();
			/* Act on the event */
		});
});