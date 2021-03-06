<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <!-- Include meta tag to ensure proper rendering and touch zooming -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Include jQuery Mobile stylesheets -->
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
  <!-- Include the jQuery library -->
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

  <!-- Include the jQuery Mobile library -->
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

<!-- para el formulario -->
  	<link rel="stylesheet" type="text/css" href="CSS\demo.css">
	<link rel="stylesheet" type="text/css" href="CSS\estiloAcceso.css"> 
	<script type="text/javascript" language="JavaScript" src="JS/principalJavaScript.js"></script>

	<link rel="stylesheet" type="text/css" href="CSS\indexJQMobile.css">
	<link rel="stylesheet" type="text/css" href="CSS\slider_mujer.css">
    <link rel="stylesheet" type="text/css" href="CSS\secundariaJQMobile.css">
    <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
  	
</head>

<body>

	<div data-role="page" id="paginaPrincipal" data-fullscreen="true" data-title="Mazo">

		<!--Banner negro en movimiento-->
		<div class="banner">
			<MARQUEE style="background: black; font-size: 15.5px; padding: 6px; color: white;" scrollamount="8"> ¡Descuento del 10% para socios! &emsp;&emsp;Devoluciones y gastos de envío gratuitos </MARQUEE>
		</div>
		<div data-role="panel" id="panelPrincipal">
   			<a href="#paginaPrincipal"><img src="imagenes\logos\mazo.png" style="width:40%; left: 30px;"></a> <br>
   			<p><a href="#paginaMujer" style="text-decoration: none; color: black; ">MUJER</a></p>
   			<br>
   			<p><a href="#" style="text-decoration: none; color: black;">HOMBRE</a></p>
   			<br>
   			<p><a href="#" style="text-decoration: none; color: black; ">NIÑO</a></p>
   			<br>
   			<input type="search" name="search_control" action="#"  placeholder="Realice su búsqueda..">
   			<br>
   			<p><a href="#" style="text-decoration: none; color: grey;  font-size: 17px;">SOBRE NOSOTROS</a></p>
   			<br>
   			<p><a href="#" style="text-decoration: none; color: grey;  font-size: 17px;">GARANTÍAS</a></p>
   			<br>
   			<p><a href="#" style="text-decoration: none; color: grey;  font-size: 17px;">ATENCIÓN AL CLIENTE</a></p>
		</div>
		<div data-role="header" style="height: 62px; margin-top: -5px;">

			<!--Menú desplegable-->
			<a href="#panelPrincipal" class="ui-btn ui-corner-all ui-shadow ui-icon-bars ui-btn-icon-notext" style="margin-left: 20px; margin-top: 9.5px;">Menu</a>
				
      			<!--Logo-->
				<div class="mazo" data-role="controlgroup" data-type="horizontal" align="center"> 
   					<a href="#paginaPrincipal"> <img src="imagenes\logos\mazo.png" style="width: 100px; height: 50px; margin-top: -4px;"/></a>
				</div>

				<!--Iconos laterales-->  <!--FALTA CONECTAR CON EL FORMULARIO-->
				<div data-type="horizontal" id="menu_navigation" align="right" style="margin-top: -60px;">
					<a href="#loginUsuario" id ="formularioRegistro" class="ui-btn ui-btn-inline ui-icon-user ui-corner-all ui-alt-icon ui-btn-icon-notext">Usuario</a>
					<a href="#" class="ui-btn ui-btn-inline ui-icon-shop ui-corner-all ui-alt-icon ui-btn-icon-notext">Cesta</a> 	
				</div>
		</div>
	

  		<div data-role="main" class="ui-content">
  			<div id="galeria">
				<figure class="slider">
					<figure><img src="imagenes/portada1.jpg" alt></figure>
					<figure><img src="imagenes/portada2.jpg" alt></figure>
					<figure><img src="imagenes/portada3.jpg" alt></figure>
					<figure><img src="imagenes/portada4.jpg" alt></figure>
					<figure><img src="imagenes/portada5.jpg" alt></figure>
				</figure>
			</div>
  		</div>


		<div data-role="footer" data-position="fixed">
		  	<div data-role="controlgroup" data-type="horizontal" align="center" id="redes_sociales">
				<a href="https://es-es.facebook.com/" style="color: black;" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
				<a href="https://twitter.com/?lang=es" style="color: black;" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
				<a href="https://www.instagram.com/" style="color: black;" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
				<a href="https://es.pinterest.com/" style="color: black;" target="_blank"><i class="fa fa-pinterest-p fa-2x" aria-hidden="true"></i></a>
			</div>

			<div data-role="controlgroup" data-type="horizontal" align="center" id="metodos_pago">
				<i class="fa fa-cc-visa fa-2x" aria-hidden="true"></i>
				<i class="fa fa-cc-mastercard fa-2x" aria-hidden="true"></i>
				<i class="fa fa-credit-card fa-2x" aria-hidden="true"></i>
				<i class="fa fa-cc-paypal fa-2x" aria-hidden="true"></i>
			</div>
		</div>

	</div> 

	<div data-role="page" id=paginaMujer>
		
	<div class="banner">
			<MARQUEE style="background: black; font-size: 15.5px; padding: 6px; color: white;" scrollamount="8"> ¡Descuento del 10% para socios! &emsp;&emsp;Devoluciones y gastos de envío gratuitos </MARQUEE>
		</div>

		<div data-role="panel" id="panelMujer">
        			<a href="#paginaPrincipal" ><img src="imagenes/logos/mazo.png" style="width:40%; left: 30px;"></a><br>
        			<p><a href="#paginaAbrigos" style="text-decoration: none; color: black; ">ABRIGOS</a></p>
        			<br>
        			<p><a href="#" style="text-decoration: none; color: black; ">CHAQUETAS</a></p>
        			<br>
        			<p><a href="#" style="text-decoration: none; color: black; ">CAMISAS</a></p>
        			<br>
        			<p><a href="#" style="text-decoration: none; color: black; ">CAMISETAS</a></p>
        			<br>
        			<p><a href="#" style="text-decoration: none; color: black; ">SUDADERAS</a></p>
        			<br>
        			<p><a href="#" style="text-decoration: none; color: black; ">VESTIDOS</a></p>
        			<br>
        			<p><a href="#" style="text-decoration: none; color: black; ">MONOS</a></p>
        			<br>
        			<p><a href="#" style="text-decoration: none; color: black; ">PANTALONES</a></p>
        			<br>
        			<input type="search" name="search_control" action="#" placeholder="Realice su búsqueda..">
        			<br>
        			<p><a href="#" style="text-decoration: none; color: grey;  font-size: 17px;">HOMBRE</a></p>
        			<br>
        			<p><a href="#" style="text-decoration: none; color: grey;  font-size: 17px;">NIÑO</a></p>

      	</div>

    
	  	<div data-role="header" style="height: 62px; margin-top: -5px;">

			<!--Menú desplegable-->
			<a href="#panelMujer" class="ui-btn ui-corner-all ui-shadow ui-icon-bars ui-btn-icon-notext" style="margin-left: 20px; margin-top: 9.5px;">Menu</a>
				

      			<!--Logo-->
				<div class="mazo" data-role="controlgroup" data-type="horizontal" align="center"> 
   					<a href="#paginaPrincipal"> <img src="imagenes\logos\mazo.png" style="width: 100px; height: 50px; margin-top: -4px;"/></a>
				</div>

				<!--Iconos laterales-->  <!--FALTA CONECTAR CON EL FORMULARIO-->
				<div data-type="horizontal" id="menu_navigation" align="right" style="margin-top: -60px;">
				
					<a href="#loginUsuario" data-rel="popup" class="ui-btn ui-btn-inline ui-icon-user ui-corner-all ui-alt-icon ui-btn-icon-notext">Usuario</a>
					<a href="#" class="ui-btn ui-btn-inline ui-icon-shop ui-corner-all ui-alt-icon ui-btn-icon-notext">Cesta</a> 	
				</div>
		</div>

	  <div data-role="main" class="ui-content">
	   	
			<div class="mascara">
			  <ul class="carrusel">
			    <a href="#paginaAbrigos"><li id="s1"></li></a>
			    <li id="s2"></li>
			    <li id="s3"></li>
			    <li id="s4"></li>
			    <li id="s5"></li>
			    <li id="s6"></li>
			    <li id="s7"></li>
			    <li id="s8"></li>
			  </ul>
			</div>
			<nav>
			  <ul class="dots">
			    <li><a href="#s1"></a></li>
			    <li><a href="#s2"></a></li>
			    <li><a href="#s3"></a></li>
			    <li><a href="#s4"></a></li>
			    <li><a href="#s5"></a></li>
			    <li><a href="#s6"></a></li>
			    <li><a href="#s7"></a></li>
			    <li><a href="#s8"></a></li>
			  </ul>
			</nav>
			
			<script>

			var anchoMascara = $('.mascara').width();
			var numeroSlides = $('.carrusel li').size();

			$('.carrusel').css({ width: anchoMascara*numeroSlides})

			$('.dots a').on('click', mueveCarrusel);

			function mueveCarrusel (e) {
				var quien = $(this).attr('href');
				var posX = $(quien).position().left;
			    //alert(posX);
				$('.carrusel').stop(true).animate({ left: -posX },500);
				//Cambio el color
				$('ul.dots a').css("background", '#ddd');		
				$(this).css("background", '#444');	
				e.preventDefault();
			}
			</script>

	  	</div>

    		<!--<div data-role="popup" id="loginUsuario">
  				<h5>Regístrate</h5>
					<a href="index.html" class="icon icon-cancel-circle"></a><br>
					<form id="registroUser" method="post" action="PHP/registro.php">
					
					<div class="columUna"> 
						<ul>
							<li>
								<label for="direccionEmail"> DIRECCIÓN DE E-MAIL</label>
									<input type="e-mail" id="direccionEmail" name="mail" value=""/>
									<span class="icon icon-warning" id="errorEmail"></span>
							</li>

							<li>
								<label for="passUser"> CONTRASEÑA</label>
									<input type="password" id="passUser" name="pass" value=""/>
									<span class="icon icon-warning" id="errorPass"></span>
							</li>

							<li>
								<label for="passAgain"> REPETIR CONTRASEÑA</label>
									<input type="password" id="passAgain" name="pass2" value=""/>
									<span class="icon icon-warning" id="errorPass2"></span>
							</li>

							<li>
								<img class="imagenMujer" src="img/mujer.jpg">
							</li>
			</div>

			<div class="columDos">
							<li>
								<label for="nombreUser"> NOMBRE
									<input type="text" id="nombreUser" name="nombreUser" value=""/>
									<span class="icon icon-warning" id="errorNombre"></span>
								</label>
							</li>
							<li>
								<label for="apelliUser"> APELLIDOS
									<input type="text" id="apellidoUser" name="apellidoUser" value=""/>
									<span class="icon icon-warning" id="errorApellido"></span>
								</label>
							</li>
							<li>
								<label for="dni"> DNI
									<input type="text" id="dni" name="dni" value="" />
									<span class="icon icon-warning" id="errorDNI"></span>
								</label>
							</li>
							<li>
								<input type="radio" id="sexoH" class="sexo" name="genero" value="HOMBRE"/>
									<label class="etiqueta">HOMBRE</label><br>
								<input type="radio" id="sexoM" class="sexo" name="genero" value="MUJER" />
									<label class="etiqueta">MUJER</label><br>
								<span class="icon icon-warning" id="errorGenero"></span>
							</li>
							<br>
							<br>
							<li>
								<label for="direccion"> DIRECCIÓN
									<input type="text" id="direccion" name="direccion" value=""/>
									<span class="icon icon-warning" id="errorDireccion"></span>
								</label>
							</li>
							<li>
								<label for="localidad"> LOCALIDAD
									<input type="text" id="localidad" name="localidad" value="" />
									<span class="icon icon-warning" id="errorLocalidad"></span>
								</label>
							</li>
							<li>
								<label for="codigoPostal"> CÓDIGO POSTAL
									<input type="text" id="codigoPostal" name="codigoPostal" value="" />
									<span class="icon icon-warning" id="errorCP"></span>
								</label>
							</li>
							<li>
								<label> PROVINCIA
									<input type="text" id="provincia" name="provincia" value="" />
									<span class="icon icon-warning" id="errorProvincia"></span>
								</label>
							</li>
							<li>
								<label for="telefonoMovil"> TELÉFONO MÓVIL
									<input type="text" id="telefonoMovil" name="telefonoMovil" value="" />
									<span class="icon icon-warning" id="errorTM"></span>
								</label>
							</li>
							<li>
								<label class="texto"> HE LEIDO Y ACEPTO LA POLÍTICA DE PRIVACIDAD
									<input type="checkbox" id="politicaPrivacidad" name="politicaPrivacidad" value="" />
									<span class="icon icon-warning" id="errorPrivacidad"></span>
								</label>
							</li>
							<input type="button" id="registro" class="boton" name="registroUsuario" value="REGÍSTRATE"/>
					</div>
						</ul>
					</form>
			</div>
		</div>

	  	</div>-->

		<div data-role="footer" data-position="fixed">
		  	<div data-role="controlgroup" data-type="horizontal" align="center" id="redes_sociales">
				<a href="https://es-es.facebook.com/" style="color: black;" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
				<a href="https://twitter.com/?lang=es" style="color: black;" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
				<a href="https://www.instagram.com/" style="color: black;" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
				<a href="https://es.pinterest.com/" style="color: black;" target="_blank"><i class="fa fa-pinterest-p fa-2x" aria-hidden="true"></i></a>
			</div>

			<div data-role="controlgroup" data-type="horizontal" align="center" id="metodos_pago">
				<i class="fa fa-cc-visa fa-2x" aria-hidden="true"></i>
				<i class="fa fa-cc-mastercard fa-2x" aria-hidden="true"></i>
				<i class="fa fa-credit-card fa-2x" aria-hidden="true"></i>
				<i class="fa fa-cc-paypal fa-2x" aria-hidden="true"></i>
			</div>
		</div>
	</div>

	<div data-role="page" id="paginaAbrigos">
		
		<!--Banner negro en movimiento-->
		<div class="banner">
			<MARQUEE style="background: black; font-size: 15.5px; padding: 6px; color: white;" scrollamount="8"> ¡Descuento del 10% para socios! &emsp;&emsp;Devoluciones y gastos de envío gratuitos </MARQUEE>
		</div>

		<div data-role="panel" id="panelAbrigos">
        	<a href="#paginaPrincipal" ><img src="imagenes\logos\mazo.png" style="width:40%; left: 30px;"></a><br>
    		    <div data-role="collapsibleset">
		        	<div data-role="collapsible">
		    	    	<h6 style="text-decoration: none; color: black; ">ABRIGOS</h6>
			        	<a href="#PaginaSecundaria"><p style="text-decoration: none; color: black; ">PAÑO</p></a>
			        	<p style="text-decoration: none; color: black; ">PARKA</p>	
			        	<p style="text-decoration: none; color: black; ">PLUMAS</p>
			       	</div>
        	
		        	<div data-role="collapsible">
			        	<h6 style="text-decoration: none; color: black;">CHAQUETAS</h6>
						<p style="text-decoration: none; color: black; ">VAQUERAS</p>
			        	<p style="text-decoration: none; color: black; ">AMERICANAS</p>	
			        	<p style="text-decoration: none; color: black; ">LANA</p>
		        	</div>

        			<div data-role="collapsible"> 
			        	<h6 style="text-decoration: none; color: black;">CAMISAS</h6>
			        	<p style="text-decoration: none; color: black; ">MANGA LARGA</p>
			        	<p style="text-decoration: none; color: black; ">MANGA CORTA</p>	
		        	</div>

		        	<div data-role="collapsible">
			        	<h6 style="text-decoration: none; color: black;">CAMISETAS</h6>	
						<p style="text-decoration: none; color: black; ">TIRANTES</p>
			        	<p style="text-decoration: none; color: black; ">MANGA LARGA</p>
			        	<p style="text-decoration: none; color: black; ">MANGA CORTA</p>	
		        	</div>

		        	<div data-role="collapsible">
			        	<h6 style="text-decoration: none; color: black;">SUDADERAS</h6>	
						<p style="text-decoration: none; color: black; ">DEPORTIVAS</p>
			        	<p style="text-decoration: none; color: black; ">CAPUCHA</p>	
			        	<p style="text-decoration: none; color: black; ">PLANAS</p>
		        	</div>
        	
		        	<div data-role="collapsible">
			        	<h6 style="text-decoration: none; color: black;">VESTIDOS</h6>	
						<p style="text-decoration: none; color: black; ">LARGOS</p>
			        	<p style="text-decoration: none; color: black; ">CORTOS</p>	
			        	<p style="text-decoration: none; color: black; ">VESTIR</p>
		        	</div>
        	
		        	<div data-role="collapsible">
			        	<h6 style="text-decoration: none; color: black;">FALDAS</h6>	
						<p style="text-decoration: none; color: black; ">TUBO</p>
			        	<p style="text-decoration: none; color: black; ">VUELO</p>	
			        	<p style="text-decoration: none; color: black; ">CINTURA ALTA</p>
		        	</div>

		        	<div data-role="collapsible">
			        	<h6 style="text-decoration: none; color: black;">MONOS</h6>	
						<p style="text-decoration: none; color: black; ">VAQUEROS</p>
			        	<p style="text-decoration: none; color: black; ">PALABRA DE HONOR</p>	
			        	<p style="text-decoration: none; color: black; ">ESPALDA AL AIRE</p>
		        	</div>
        	
		        	<div data-role="collapsible">
			        	<h6 style="text-decoration: none; color: black;">PANTALONES</h6>	
						<p style="text-decoration: none; color: black;">PANA</p>
			        	<p style="text-decoration: none; color: black;">VAQUEROS</p>	
			        	<p style="text-decoration: none; color: black;">MALLAS</p>
		        	</div>
        	
		        	<input type="search" name="search_control" action="#" placeholder="Realice su búsqueda..">
		        	<br>
	    	    	<p><a href="#paginaMujer" style="text-decoration: none; color: grey;  font-size: 17px;">MUJER</a></p>
	    	    	<br>
	    	    	<p><a href="#" style="text-decoration: none; color: grey;  font-size: 17px;">HOMBRE</a></p>
        			<br>
        			<p><a href="#" style="text-decoration: none; color: grey;  font-size: 17px;">NIÑO</a></p>

      			</div>
           	</div>

<!-- Menú con las opciones de las distintas ropas -->

		<div data-role="header" style="height: 62px;">
		<!-- poner content en data-role es lo mismo que poner data-role="main" class="ui-content" -->
     		<a href="#panelAbrigos" class="ui-btn ui-btn-inline ui-corner-all ui-shadow ui-icon-bars ui-btn-icon-notext" style="margin-left: 20px; margin-top: 9.5px;"></a>
		
     		<!--Logo-->
			<div class="mazo" data-role="controlgroup" data-type="horizontal" align="center"> 
   				<a href="#paginaPrincipal" data-rel="close"> <img src="imagenes\logos\mazo.png" style="width: 100px; height: 50px; margin-top: -4px;"/></a>
			</div>

			<!--Iconos laterales-->  <!--FALTA CONECTAR CON EL FORMULARIO-->
			<div data-type="horizontal" id="menu_navigation" align="right" style="margin-top: -60px;">
				<a href="#" class="ui-btn ui-btn-inline ui-icon-user ui-corner-all ui-alt-icon ui-btn-icon-notext">Usuario</a>
				<a href="#" class="ui-btn ui-btn-inline ui-icon-shop ui-corner-all ui-alt-icon ui-btn-icon-notext">Cesta</a> 	
			</div>
									
      	</div>	

		<div data-role="content">

				<div class="ui-grid-a ui-responsive">
					<div class="ui-block-a">
						<a href="#PaginaSecundaria" class="ui-btn ui-corner-all ui-shadow"><img src="imagenes/abrigos/negro1.jpg">
						<br>
							<span class="icon-price-tags"></span>
							<span>Abrigo de paño negro<br>89,99 €</span>
						</a>
					</div>
					<div class="ui-block-b">
						<a href="#" class="ui-btn ui-corner-all ui-shadow"> <img src="imagenes/abrigos/gris1.jpg">
							<br>
							<span class="icon-price-tags"></span>
							<span>Abrigo de paño militar<br>75,89 €</span>
						</a>
					</div>
					<div class="ui-block-a">
						<a href="#" class="ui-btn ui-corner-all ui-shadow"> <img src="imagenes/abrigos/botones1.jpg">
							<br>
							<span class="icon-price-tags"></span>
							<span>Abrigo lady botones<br>59,50 €</span>
						</a>
					</div>
					<div class="ui-block-b">
						<a href="#" class="ui-btn ui-corner-all ui-shadow"> <img src="imagenes/abrigos/animal1.jpg">
							<br>
							<span class="icon-price-tags"></span>
							<span>Abrigo manga abierta<br>49,90</span>
						</a>
					</div>
					<div class="ui-block-a">
						<a href="#" class="ui-btn ui-corner-all ui-shadow"> <img src="imagenes/abrigos/plumas1.jpg">
							<br>
							<span class="icon-price-tags"></span>
							<span>Plumas con pelo<br>69,50 €</span>
						</a>
					</div>
					<div class="ui-block-b">
						<a href="#" class="ui-btn ui-corner-all ui-shadow"> <img src="imagenes/abrigos/trench1.jpg">
							<br>
							<span class="icon-price-tags"></span>
							<span>Trench rígida<br>49,95 €</span>					
						</a>
					</div>
					<div class="ui-block-a">
						<a href="#" class="ui-btn ui-corner-all ui-shadow"> <img src="imagenes/abrigos/biker1.jpg"> 
							<br>
							<span class="icon-price-tags"></span>
							<span>Abrigo biker<br>49,95 €</span>
						</a>
					</div>
					<div class="ui-block-b">
						<a href="#" class="ui-btn ui-corner-all ui-shadow"> <img src="imagenes/abrigos/parka1.jpg"> 
							<br>
							<span class="icon-price-tags"></span>
							<span>Parka clásica<br>89,90 €</span>
						</a>
					</div>
				</div>
			<!-- <ul data-role="listview" data-insert="false"> -->
			<!-- Si inserto el enlace dentro de la lista la imagen se ve en pequeño, ¿por qué? 
			Si inserto el enlace fuera de la lista la imagen se ve grande, ¿por qué?-->

			<!-- 	<li> <a href="#" data-transition="slide"> <img src="imagenes/abrigos/negro1.jpg" width="100%" height="100%"> no sé por que no se amolda al tamaño de pantalla, como tendría que hacerlo en jquery mobile</a></li>
				<a href="#" data-transition="slide"> <li><img src="imagenes/abrigos/gris1.jpg" width="100%" height="100%"> no sé por que no se amolda al tamaño de pantalla, como tendría que hacerlo en jquery mobile</li></a>
				<a href="#" data-transition="slide"> <li><img src="imagenes/abrigos/botones1.jpg" width="100%" height="100%"> no sé por que no se amolda al tamaño de pantalla, como tendría que hacerlo en jquery mobile</li></a>
				<a href="#" data-transition="slide"> <li><img src="imagenes/abrigos/animal1.jpg" width="100%" height="100%"> no sé por que no se amolda al tamaño de pantalla, como tendría que hacerlo en jquery mobile</li></a>
				<a href="#" data-transition="slide"> <li><img src="imagenes/abrigos/plumas1.jpg" width="100%" height="100%"> no sé por que no se amolda al tamaño de pantalla, como tendría que hacerlo en jquery mobile</li></a>
				<a href="#" data-transition="slide"> <li><img src="imagenes/abrigos/trench1.jpg" width="100%" height="100%"> no sé por que no se amolda al tamaño de pantalla, como tendría que hacerlo en jquery mobile</li></a>
				<a href="#" data-transition="slide"> <li><img src="imagenes/abrigos/biker1.jpg" width="100%" height="100%"> no sé por que no se amolda al tamaño de pantalla, como tendría que hacerlo en jquery mobile</li></a>
				<a href="#" data-transition="slide"> <li><img src="imagenes/abrigos/parka1.jpg" width="100%" height="100%"> no sé por que no se amolda al tamaño de pantalla, como tendría que hacerlo en jquery mobile</li></a>
				<a href="#" data-transition="slide"> <li><img src="imagenes/abrigos/blazer1.jpg" width="100%" height="100%"> no sé por que no se amolda al tamaño de pantalla, como tendría que hacerlo en jquery mobile</li></a> -->
			<!-- </ul> -->
		</div>

		<div data-role="footer">
				
		  	<div data-role="controlgroup" data-type="horizontal" align="center" id="redes_sociales">
				<a href="https://es-es.facebook.com/" style="color: black;" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
				<a href="https://twitter.com/?lang=es" style="color: black;" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
				<a href="https://www.instagram.com/" style="color: black;" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
				<a href="https://es.pinterest.com/" style="color: black;" target="_blank"><i class="fa fa-pinterest-p fa-2x" aria-hidden="true"></i></a>
			</div>

			<div data-role="controlgroup" data-type="horizontal" align="center" id="metodos_pago">
				<i class="fa fa-cc-visa fa-2x" aria-hidden="true"></i>
				<i class="fa fa-cc-mastercard fa-2x" aria-hidden="true"></i>
				<i class="fa fa-credit-card fa-2x" aria-hidden="true"></i>
				<i class="fa fa-cc-paypal fa-2x" aria-hidden="true"></i>
			</div> 
		</div>		
	</div>

	<div data-role= "page" id="PaginaSecundaria">
		<div class="banner">
			<MARQUEE style="background: black; font-size: 15.5px; padding: 6px; color: white;" scrollamount="8"> ¡Descuento del 10% para socios! &emsp;&emsp;Devoluciones y gastos de envío gratuitos </MARQUEE>
		</div>

		<div data-role="panel" id="panelSecundario">
        	<a href="#paginaPrincipal" ><img src="imagenes\logos\mazo.png" style="width:40%; left: 30px;"></a><br>
    		    <div data-role="collapsibleset">
		        	<div data-role="collapsible">
		    	    	<h6 style="text-decoration: none; color: black; ">ABRIGOS</h6>
			        	<p style="text-decoration: none; color: black; ">PAÑO</p>
			        	<p style="text-decoration: none; color: black; ">PARKA</p>	
			        	<p style="text-decoration: none; color: black; ">PLUMAS</p>
			       	</div>
        	
		        	<div data-role="collapsible">
			        	<h6 style="text-decoration: none; color: black;">CHAQUETAS</h6>
						<p style="text-decoration: none; color: black; ">VAQUERAS</p>
			        	<p style="text-decoration: none; color: black; ">AMERICANAS</p>	
			        	<p style="text-decoration: none; color: black; ">LANA</p>
		        	</div>

        			<div data-role="collapsible"> 
			        	<h6 style="text-decoration: none; color: black;">CAMISAS</h6>
			        	<p style="text-decoration: none; color: black; ">MANGA LARGA</p>
			        	<p style="text-decoration: none; color: black; ">MANGA CORTA</p>	
		        	</div>

		        	<div data-role="collapsible">
			        	<h6 style="text-decoration: none; color: black;">CAMISETAS</h6>	
						<p style="text-decoration: none; color: black; ">TIRANTES</p>
			        	<p style="text-decoration: none; color: black; ">MANGA LARGA</p>
			        	<p style="text-decoration: none; color: black; ">MANGA CORTA</p>	
		        	</div>

		        	<div data-role="collapsible">
			        	<h6 style="text-decoration: none; color: black;">SUDADERAS</h6>	
						<p style="text-decoration: none; color: black; ">DEPORTIVAS</p>
			        	<p style="text-decoration: none; color: black; ">CAPUCHA</p>	
			        	<p style="text-decoration: none; color: black; ">PLANAS</p>
		        	</div>
        	
		        	<div data-role="collapsible">
			        	<h6 style="text-decoration: none; color: black;">VESTIDOS</h6>	
						<p style="text-decoration: none; color: black; ">LARGOS</p>
			        	<p style="text-decoration: none; color: black; ">CORTOS</p>	
			        	<p style="text-decoration: none; color: black; ">VESTIR</p>
		        	</div>
        	
		        	<div data-role="collapsible">
			        	<h6 style="text-decoration: none; color: black;">FALDAS</h6>	
						<p style="text-decoration: none; color: black; ">TUBO</p>
			        	<p style="text-decoration: none; color: black; ">VUELO</p>	
			        	<p style="text-decoration: none; color: black; ">CINTURA ALTA</p>
		        	</div>

		        	<div data-role="collapsible">
			        	<h6 style="text-decoration: none; color: black;">MONOS</h6>	
						<p style="text-decoration: none; color: black; ">VAQUEROS</p>
			        	<p style="text-decoration: none; color: black; ">PALABRA DE HONOR</p>	
			        	<p style="text-decoration: none; color: black; ">ESPALDA AL AIRE</p>
		        	</div>
        	
		        	<div data-role="collapsible">
			        	<h6 style="text-decoration: none; color: black;">PANTALONES</h6>	
						<p style="text-decoration: none; color: black;">PANA</p>
			        	<p style="text-decoration: none; color: black;">VAQUEROS</p>	
			        	<p style="text-decoration: none; color: black;">MALLAS</p>
		        	</div>
        	
		        	<input type="search" name="search_control" action="#" placeholder="Realice su búsqueda..">
		        	<br>
	    	    	<p><a href="#paginaMujer" style="text-decoration: none; color: grey;  font-size: 17px;">MUJER</a></p>
	    	    	<br>
	    	    	<p><a href="#" style="text-decoration: none; color: grey;  font-size: 17px;">HOMBRE</a></p>
        			<br>
        			<p><a href="#" style="text-decoration: none; color: grey;  font-size: 17px;">NIÑO</a></p>

      			</div>
           	</div>

		<div data-role="header" style="height: 62px;">
			<!-- poner content en data-role es lo mismo que poner data-role="main" class="ui-content" -->
     		<a href="#panelSecundario" class="ui-btn ui-btn-inline ui-corner-all ui-shadow ui-icon-bars ui-btn-icon-notext" style="margin-left: 20px; margin-top: 9.5px;"></a>
		
     		<!--Logo-->
			<div class="mazo" data-role="controlgroup" data-type="horizontal" align="center"> 
   				<a href="#paginaPrincipal" data-rel="close"> <img src="imagenes\logos\mazo.png" style="width: 100px; height: 50px; margin-top: -4px;"/></a>
			</div>

			<!--Iconos laterales-->  <!--FALTA CONECTAR CON EL FORMULARIO-->
			<div data-type="horizontal" id="menu_navigation" align="right" style="margin-top: -60px;">
				<a href="#" class="ui-btn ui-btn-inline ui-icon-user ui-corner-all ui-alt-icon ui-btn-icon-notext">Usuario</a>
				<a href="#" class="ui-btn ui-btn-inline ui-icon-shop ui-corner-all ui-alt-icon ui-btn-icon-notext">Cesta</a> 	
			</div>
		</div>

		<div data-role="content">
			
		   	<div id="caracteristicas">
		      <p class="iten">Abrigo de paño negro</p>
		      <p class="ref">ref:123456</p>
		      <p class="precio">89,99€</p>
		    </div>

		    <div id="galeria2">
        		<figure class="slider2">
		          <figure><img src="imagenes/fotos_secundarias/vista1.jpg" alt></figure>
		          <figure><img src="imagenes/fotos_secundarias/vista2.jpg" alt></figure>
		          <figure><img src="imagenes/fotos_secundarias/vista3.jpg" alt></figure>
		          <figure><img src="imagenes/fotos_secundarias/vista4.jpg" alt></figure>
		        </figure>
      		</div> 

    		
 		    <div class="preferencia">			
			    <p class="seleccioncolor" style="color: #696969">SELECCIONA COLOR</p>
			    <div class="cuadrocolor1"><a href="#"></a></div>
			    <div class="cuadrocolor2"><a href="#"></a></div>
			    <p class="tallasdisponibles" style="color: #696969">TALLAS DISPONIBLES</p>
			    <div class="tallaS" style="color: #000000;"><a href="#">S</a></div>
			    <div class="tallaM" style="color: #000000;"><a href="#">M</a></div>
			    <div class="tallaL" style="color: #000000;"><a href="#">L</a></div>
			    <div class="cesta" style="color: #FFFFFF;"><a class="añadir" href="#">AÑADIR A LA CESTA</a></div>

			</div>

		</div>

		<div data-role="footer">
			<div data-role="controlgroup" data-type="horizontal" align="center" id="redes_sociales">
				<a href="https://es-es.facebook.com/" style="color: black;" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
				<a href="https://twitter.com/?lang=es" style="color: black;" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
				<a href="https://www.instagram.com/" style="color: black;" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
				<a href="https://es.pinterest.com/" style="color: black;" target="_blank"><i class="fa fa-pinterest-p fa-2x" aria-hidden="true"></i></a>
			</div>

			<div data-role="controlgroup" data-type="horizontal" align="center" id="metodos_pago">
				<i class="fa fa-cc-visa fa-2x" aria-hidden="true"></i>
				<i class="fa fa-cc-mastercard fa-2x" aria-hidden="true"></i>
				<i class="fa fa-credit-card fa-2x" aria-hidden="true"></i>
				<i class="fa fa-cc-paypal fa-2x" aria-hidden="true"></i>
			</div> 
		</div>

	</div>

	<div id="loginUsuario">
			
			<h5>Identifícate</h5>
			<a href="indexMobile.php"> <i class="icon icon-cancel-circle"></i></a><br>
			<!-- Para el formulari no debo poner ninguna classe en etiqueta deben ir en los input, con las siguientes normas
			1. todos los input dentro una class con el mismo nombre para definir su formato en css
			2. Se crear un div después de cada input con el fin de definir tb el mismo mensaje para todos los input no rellenos y un mensaje para que sea uno u otro dependindo del campo sin rellenar
			 -->
			<form class="formularioAcceso" method="post" action="PHP/accesoBueno.php">
				
				<!-- el for del label nos lleva al input declarado 
				1. todos los input tendran la misma class para definirla en css de la misma forma
				2. el id será distinto porque con el obtendremos los datos de comprobación-->

				<label for="nombre"> DIRECCION DE E-MAIL</label><br>
				<!-- preguntar a Diego, por qué al poner en value php, sale en el campo input como dato -->
				<input type="text" id="nombre" class="inputRegistro" name="nombre" value=""/>
				<span class="icon icon-warning" id="errorEmail"></span>

				<label for="contrasenia"> CONTRASEÑA</label><br>
				<!-- preguntar a Diego, por qué al poner en value php, sale en el campo input como dato -->
				<input type="password" id="contrasenia" class="inputRegistro" name="contrasenia" value=""/>
				<span class="icon icon-warning" id="errorPass"></span>

				<!-- por qué no se ve el radio button -->
				<input type="checkbox" id="recordarUsuario" class="inputRegistro" name="remember" value="recordarUsuario"/>
				<label class="texto"> RECORDAR USUARIO</label>

				<!-- por qué si el input es submit me borra todo el contenido, velo y formulario y si es tipo button no.  
				1. Tipo button me hace los comprobantes incluidos en javascript.
				2. Tipo button cuando están todos los datos actualizados, no llama a fichero acceso.php. 
				3. Tipo submit, no me comprueba nada, lo único que hace es mandar el formulario, sin comprobar si los datos están proporcionados o no. 
				4. Tipo submit, tp me accede a fichero acceso.php
				-->
 				<input type="button" id="enviarDatos" class="boton" name="botonAcceso" value="IDENTIFÍCATE"/> 

 				<label class="noRegistrado">Si aún no eres usuario, registrate aquí</label>
				<input type="button" id="accesoRegistro" class="boton" name="botonRegistro" value="REGÍSTRATE"/> 
		<!--
		<button type="button" id="pulsado">REGISTRATE</button>
		<input type="submit" id="enviarDatos" class="boton" value="Registro"/> 
		-->
			</form>
			</div>

	<div id="contenedorRegistroUsuario">
			<div id="datosUsuario">
					<h5>Regístrate</h5>
					<a href="indexMobile.php" class="icon icon-cancel-circle"></a><br>
					<form id="registroUser" method="post" action="PHP/registro.php">
					
					<div class="columUna"> 
						<ul>
							<li>
								<label for="direccionEmail"> DIRECCIÓN DE E-MAIL
									<input type="e-mail" id="direccionEmail" name="mail" value=""/>
									<span class="icon icon-warning" id="errorEmail"></span>
								</label>
							</li>
							<li>
								<label for="passUser"> CONTRASEÑA
									<input type="password" id="passUser" name="pass" value=""/>
									<span class="icon icon-warning" id="errorPass"></span>
								</label>
							</li>
							<li>
								<label for="passAgain"> REPETIR CONTRASEÑA
									<input type="password" id="passAgain" name="pass2" value=""/>
									<span class="icon icon-warning" id="errorPass2"></span>
								</label>
							</li>
							<li>
								<img class="imagenMujer" src="imagenes/mujer.jpg">
							</li>


					</div>
					<div class="columDos">
							<li>
								<label for="nombreUser"> NOMBRE
									<input type="text" id="nombreUser" name="nombreUser" value=""/>
									<span class="icon icon-warning" id="errorNombre"></span>
								</label>
							</li>
							<li>
								<label for="apelliUser"> APELLIDOS
									<input type="text" id="apellidoUser" name="apellidoUser" value=""/>
									<span class="icon icon-warning" id="errorApellido"></span>
								</label>
							</li>
							<li>
								<label for="dni"> DNI
									<input type="text" id="dni" name="dni" value="" />
									<span class="icon icon-warning" id="errorDNI"></span>
								</label>
							</li>
							<li>
								<input type="radio" id="sexoH" class="sexo" name="genero" value="HOMBRE"/>
									<label class="etiqueta">HOMBRE</label><br>
								<input type="radio" id="sexoM" class="sexo" name="genero" value="MUJER" />
									<label class="etiqueta">MUJER</label><br>
								<span class="icon icon-warning" id="errorGenero"></span>
							</li>
							<br>
							
							<li>
								<label for="direccion"> DIRECCIÓN
									<input type="text" id="direccion" name="direccion" value=""/>
									<span class="icon icon-warning" id="errorDireccion"></span>
								</label>
							</li>
							<li>
								<label for="localidad"> LOCALIDAD
									<input type="text" id="localidad" name="localidad" value="" />
									<span class="icon icon-warning" id="errorLocalidad"></span>
								</label>
							</li>
							<li>
								<label for="codigoPostal"> CÓDIGO POSTAL
									<input type="text" id="codigoPostal" name="codigoPostal" value="" />
									<span class="icon icon-warning" id="errorCP"></span>
								</label>
							</li>
							<li>
								<label> PROVINCIA
									<input type="text" id="provincia" name="provincia" value="" />
									<span class="icon icon-warning" id="errorProvincia"></span>
								</label>
							</li>
							<li>
								<label for="telefonoMovil"> TELÉFONO MÓVIL
									<input type="text" id="telefonoMovil" name="telefonoMovil" value="" />
									<span class="icon icon-warning" id="errorTM"></span>
								</label>
							</li>
							<li>
								<label class="texto"> HE LEIDO Y ACEPTO LA POLÍTICA DE PRIVACIDAD
									<input type="checkbox" id="politicaPrivacidad" name="politicaPrivacidad" value="" />
									<span class="icon icon-warning" id="errorPrivacidad"></span>
								</label>
							</li>
							<input type="button" id="registro" class="boton" name="registroUsuario" value="REGÍSTRATE"/>
					</div>
						</ul>
					</form>
			</div>
		</div>

</body>
</html>