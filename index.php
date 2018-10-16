<?php
require './production/admin/config.php';
include('db.php');
?>
<!DOCTYPE html>

	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif] s-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<html lang="es"></html>
	<meta http-equiv="X-UA-Compatible" content="chromimun">
	<title>BarberShopQuib</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">


	<link rel="stylesheet" href="css/style2.css">

	<!-- Styleswitcher ( This style is for demo purposes only, you may delete this anytime. ) -->
	<link rel="stylesheet" id="theme-switch" href="css/style2.css">
	<!-- End demo purposes only -->


	<style>
	/* For demo purpose only */
	
	/* For Demo Purposes Only ( You can delete this anytime :-) */
	#colour-variations {
		padding: 10px;
		-webkit-transition: 0.3s;
	  	-o-transition: 0.3s;
	  	transition: 0.3s;
		width: 140px;
		position: fixed;
		left: 0;
		top: 100px;
		z-index: 999999;
		background: #fff;
		/*border-radius: 4px;*/
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
		-webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
	}
	#colour-variations.sleep {
		margin-left: -140px;
	}
	#colour-variations h3 {
		text-align: center;;
		font-size: 11px;
		letter-spacing: 2px;
		text-transform: uppercase;
		color: #777;
		margin: 0 0 10px 0;
		padding: 0;;
	}
	#colour-variations ul,
	#colour-variations ul li {
		padding: 0;
		margin: 0;
	}
	#colour-variations li {
		list-style: none;
		display: block;
		margin-bottom: 5px!important;
		float: left;
		width: 100%;
	}
	#colour-variations li a {
		width: 100%;
		position: relative;
		display: block;
		overflow: hidden;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		-ms-border-radius: 4px;
		border-radius: 4px;
		-webkit-transition: 0.4s;
		-o-transition: 0.4s;
		transition: 0.4s;
	}
	#colour-variations li a:hover {
	  	opacity: .9;
	}
	#colour-variations li a > span {
		width: 33.33%;
		height: 20px;
		float: left;
		display: -moz-inline-stack;
		display: inline-block;
		zoom: 1;
		*display: inline;
	}
	.option-toggle {
		position: absolute;
		right: 0;
		top: 0;
		margin-top: 5px;
		margin-right: -30px;
		width: 30px;
		height: 30px;
		background: #9b9b34;
		text-align: center;
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
		color: #fff;
		cursor: pointer;
		-webkit-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-moz-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		-ms-box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
		box-shadow: 0 0 9px 0 rgba(0,0,0,.1);
	}
	.option-toggle i {
		top: 2px;
		position: relative;
	}
	.option-toggle:hover, .option-toggle:focus, .option-toggle:active {
		color:  #fff;
		text-decoration: none;
		outline: none;
	}
	</style>
	<!-- End demo purposes only -->

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<header role="banner" id="fh5co-header">
			<div class="container">
				<!-- <div class="row"> -->
			    <nav class="navbar navbar-default">
		        <div class="navbar-header">
		        	<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		        	<a class="navbar-brand" href="index.php">BARBERSHOPQUIB</a> 
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav navbar-right">
		            <li class="active"><a href="#" data-nav-section="home"></i><span><i class=" icon-home"></i> Inicio</span></a></li>
		            <li><a href="#" data-nav-section="fotos"><span><i class=" icon-photo"></i> Galeria</span></a></li>
		            <li><a href="#" data-nav-section="reseñas"><span><i class=" icon-pencil"></i> Reseñas</span></a></li>
		            <li><a href="#" data-nav-section="servicios"><span><i class=" icon-book"></i> Servicios</span></a></li>
		            <li><a href="#" data-nav-section="equipo"><span><i class=" icon-users"></i> Equipo</span></a></li>
					<li><a href="#" data-nav-section="contactenos"><span><i class=" icon-mail2"></i> Contáctenos</span></a></li>
					<li><a href="<?php echo RUTA.'./production/login.php' ?>"><span><i class="icon-lock"></i> Ingresar</span></a></li>
				</ul>
			</div>
			    </nav>
			  <!-- </div> -->
		  </div>
	</header>

	<section id="fh5co-home" data-section="home" style="background-image: url(images/b20.jpg);" data-stellar-background-ratio="0.5">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h1 class="to-animate">BIENVENIDO A NUESTRA BARBERÍA</h1>
							<h2 class="to-animate">EL MEJOR SERVICIO Y LA MAYOR COMODIDAD QUE PODRAS TENER.</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slant"></div>
	</section>

	

	<section id="fh5co-intro">
		<div class="container">
			<div class="row row-bottom-padded-lg">
				<div class="fh5co-block to-animate" style="background-image: url(images/cor010.jpg);">
					<div class="overlay-darker"></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon-money"></i>
						<h2> Los mejores precios</h2>
						<p>Ven y disftuta un momento con nosotros.</p>
					</div>
				</div>	

				<div class="fh5co-block to-animate" style="background-image: url(images/cor011.jpg);">
					<div class="overlay-darker"></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon-location2"></i>
						<h2>Barbershopquib</h2>
						<p>Queremos ayudar a relanzar uno de los oficios más valorados por el público masculino.</p>
					</div>
				</div>

				<div class="fh5co-block to-animate" style="background-image: url(images/cor012.jpg);">
					<div class="overlay-darker"></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon-book"></i>
						<h2>Excelente servicio y Calidad</h2>
						<p>Los mejores barberos que podras encontrar, sabemos lo que amas.</p>
					</div>
				</div>
				
			</div>
					<div class="row watch-video text-center to-animate">				
						<a href="./Barber2.0-admin/reservas.php" class="btn btn-lg"><h2><i class="fh5co-intro-icon icon-calendar-check-o"></i> ¡RESERVA AQUI TU TURNO!</h2></a> 
					</div>
		</div>
	</section>

	<section id="fh5co-work" data-section="fotos" >
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Nuestra Galeria</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>Aquí encontraras una gran variedad de cortes e inspirarte a escoger el tuyo.</h3>
							<h3>ANÍMATE</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-bottom-padded-sm">
				<div class="col-md-4 col-sm-6 col-xxs-12">
					<a href="images/cor01.jpg" class="fh5co-project-item image-popup to-animate">
						<img src="images/cor01.jpg" alt="Image" class="img-responsive">
						<div class="fh5co-text">
						<h2>Jersey</h2>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xxs-12">
					<a href="images/cor02.jpg" class="fh5co-project-item image-popup to-animate">
						<img src="images/cor02.jpg" alt="Image" class="img-responsive">
						<div class="fh5co-text">
						<h2>Corte Completo</h2>
						</div>
					</a>
				</div>

				<div class="clearfix visible-sm-block"></div>

				<div class="col-md-4 col-sm-6 col-xxs-12">
					<a href="images/cor03.jpg" class="fh5co-project-item image-popup to-animate">
						<img src="images/cor03.jpg" alt="Image" class="img-responsive">
						<div class="fh5co-text">
						<h2>Jersey + Barba</h2>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xxs-12">
					<a href="images/cor04.jpg" class="fh5co-project-item image-popup to-animate">
						<img src="images/cor04.jpg" alt="Image" class="img-responsive">
						<div class="fh5co-text">
						<h2>Jersey + Barba</h2>
						</div>
					</a>
				</div>
				
				<div class="clearfix visible-sm-block"></div>

				<div class="col-md-4 col-sm-6 col-xxs-12">
					<a href="images/cor05.jpg" class="fh5co-project-item image-popup to-animate">
						<img src="images/cor05.jpg" alt="Image" class="img-responsive">
						<div class="fh5co-text">
						<h2>Jersey</h2>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xxs-12">
					<a href="images/cor06.jpg" class="fh5co-project-item image-popup to-animate">
						<img src="images/cor06.jpg" alt="Image" class="img-responsive">
						<div class="fh5co-text">
						<h2>Jersey + Barba</h2>
						</div>
					</a>
				</div>
				
				<div class="clearfix visible-sm-block"></div>

				<div class="col-md-4 col-sm-6 col-xxs-12">
					<a href="images/cor07.jpg" class="fh5co-project-item image-popup to-animate">
						<img src="images/cor07.jpg" alt="Image" class="img-responsive">
						<div class="fh5co-text">
						<h2>Broklyn + Barbar</h2>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xxs-12">
					<a href="images/cor08.jpg" class="fh5co-project-item image-popup to-animate">
						<img src="images/cor08.jpg" alt="Image" class="img-responsive">
						<div class="fh5co-text">
						<h2>Tinturada</h2>
						</div>
					</a>
				</div>

				<div class="clearfix visible-sm-block"></div>

				<div class="col-md-4 col-sm-6 col-xxs-12">
					<a href="images/cor09.jpg" class="fh5co-project-item image-popup to-animate">
						<img src="images/cor09.jpg" alt="Image" class="img-responsive">
						<div class="fh5co-text">
						<h2>Lados + Barba</h2>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section id="fh5co-testimonials" data-section="reseñas">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Reseñas de los visitantes</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>!Aquí estan las experiencias de algunos de nuestros visitante!</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box-testimony">
						<blockquote class="to-animate-2">
							<p>&ldquo;Es fascinante y divertido pase momentos agradables, vale la pena volver.&rdquo;</p>
						</blockquote>
						<div class="author to-animate">
							<figure><img src="images/us1.png" alt="Person"></figure>
							<p>Nicky Jam<span class="subtext">Cantate</span></p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box-testimony">
						<blockquote class="to-animate-2">
								<p>&ldquo;Es fascinante y divertido pase momentos agradables, vale la pena volver.&rdquo;</p>
						</blockquote>
						<div class="author to-animate">
							<figure><img src="images/us2.jpg" alt="Person"></figure>
							<p>J Balvin<span class="subtext">Cantante & Productor</span></p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="box-testimony">
						<blockquote class="to-animate-2">
								<p>&ldquo;Es fascinante y divertido pase momentos agradables, vale la pena volver.&rdquo;</p>
						</blockquote>
						<div class="author to-animate">
							<figure><img src="images/us3.jpg" alt="Person"></figure>
							<p>Maluma<span class="subtext">Cantante</span></p>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
	</section>


	<section id="fh5co-services" data-section="servicios">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-left">
					<h2 class=" left-border to-animate">Servicios</h2>
					<div class="row">
						<div class="col-md-8 subtext to-animate">
							<h3>¡Te ofrecemos una gran cantidad de servicios para todos tus gustos y darte una experiencia inolvidable!</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 fh5co-service to-animate">
					<i class="icon to-animate-2 icon-mustache"></i>
					<h3>Expertos en bigotes </h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean</p>
				</div>
				<div class="col-md-6 col-sm-6 fh5co-service to-animate">
					<i class="icon to-animate-2 icon-hand-lizard-o"></i>
					<h3>Crema &amp; Shampoo</h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean</p>
				</div>

				<div class="clearfix visible-sm-block"></div>

				<div class="col-md-6 col-sm-6 fh5co-service to-animate">
					<i class="icon to-animate-2 icon-cut"></i>
					<h3>Afeitado &amp; Corte de pelo</h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean</p>
				</div>
				<div class="col-md-6 col-sm-6 fh5co-service to-animate">
					<i class="icon to-animate-2 icon-cut"></i>
					<h3>Corte de pelo &amp; Peines</h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean</p>
				</div>
				
			</div>
		</div>
	</section>
	
	<section id="fh5co-about" data-section="equipo">
		<div class="container">
			<div class="row">
				<div class="col-md-8 section-heading text-center">
					<h2 class="to-animate">Equipo de trabajo</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>¡Esta son todas las personas que trabajan por tu comodidad y mantener tu estilo!.</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="fh5co-person text-center to-animate">
						<figure><img src="images/eq2.jpg" alt="Image"></figure>
						<h3>Stiwar Asprilla</h3>
						<span class="fh5co-position">Fundador & Web Developer</span>
						<p>Creador de BARBERSHOPQUIB En hacerla una gran peluquería y con una gran visión frente a las metas de este negocio.</p>
						<ul class="social social-circle">
							<li><a href="#"><i class="icon-whatsapp"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dropbox"></i></a></li>
							<li><a href="#"><i class="icon-mail2"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6">
					<div class="fh5co-person text-center to-animate">
						<figure><img src="images/eq1.jpg" alt="Image"></figure>
						<h3>Jhon E. Palacios</h3>
						<span class="fh5co-position">Co-Fundador & Web Developer</span>
						<p>Creador de BARBERSHOPQUIB En hacerla una gran peluquería y con una gran visión frente a las metas de este negocio.</p>
						<ul class="social social-circle">
							<li><a href="#"><i class="icon-whatsapp"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dropbox"></i></a></li>
							<li><a href="#"><i class="icon-mail2"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="fh5co-counters" style="background-image: url(images/full_image_1.jpg);" data-stellar-background-ratio="0.5">
		<div class="fh5co-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center to-animate">
					<h2>horarios de atención</h2>
				</div>
			</div>
			<div class="row">
				
				<div class="col-md-2">
				<div class="fh5co-counter to-animate">
					<h3>LUNES</h3> 
					<span class="fh5co-counter-label">8:00AM - 11:30AM   2:00PM - 6:00PM</span> 
				</div>	
				</div>

				<div class="col-md-2">	
				<div class="fh5co-counter to-animate">
					<h3>MARTES</h3>
					<span class="fh5co-counter-label">8:00AM - 11:30AM   2:00PM - 6:00PM</span> 
				</div>	
				</div>

				<div class="col-md-2">
				<div class="fh5co-counter to-animate">
					<h3>MIERCOLES</h3>
					<span class="fh5co-counter-label">8:00AM - 11:30AM   2:00PM - 6:00PM</span> 
				</div>
				</div>

				<div class="col-md-2 ">
				<div class="fh5co-counter to-animate">
					<h3>JUEVES</h3>
					<span class="fh5co-counter-label">8:00AM - 11:30AM   2:00PM - 6:00PM</span> 
				</div>	
				</div>


				<div class="col-md-2 ">
				<div class="fh5co-counter to-animate">
					<h3>VIERNES</h3>
					<span class="fh5co-counter-label">8:00AM - 11:30AM   2:00PM - 6:00PM</span> 
				</div>	
				</div>


				<div class="col-md-2">
				<div class="fh5co-counter to-animate">
					<h3>SÁBADO</h3>
					<span class="fh5co-counter-label">8:00AM - 11:30AM   2:00PM - 6:00PM</span> 
				</div>	
				</div>

			</div>
		</div>
	</section>

	<section id="fh5co-contact" data-section="contactenos">
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="to-animate">Contáctenos</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 subtext to-animate">
							<h3>¡ESCRIBENOS TU OPINION NOS AYUDA A CRECER!</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-6 to-animate">
					<h3>Información de contacto</h3>
					<ul class="fh5co-contact-info">
						<li class="fh5co-contact-address ">
							<i class="icon-home"></i>
							Quibdo, Chocó <br>
						</li>
						<li><i class="icon-phone"></i> (+57) (318)-391-9028 </li>
						<li><i class="icon-envelope"></i>stiwar.asprilla1998@gmail.com</li><a href="mailto:stiwar.asprilla1998@gmail.com"></a>
						<!-- <li><i class="icon-globe"></i> <a href="#">freehtml5.co</a></li> -->
					</ul>
				</div>

				<div class="col-md-6 to-animate">
					<h3>¡ESCRIBENOS!</h3>
					<form  method="post" name="sentMessage" id="contactForm" >
					<div class="form-group ">
						<label for="name" class="sr-only">Nombre</label>
						<input id="name" class="form-control" placeholder="Nombre" type="text">
					</div>
					<div class="form-group ">
						<label for="asunto" class="sr-only">Asunto</label>
						<input id="asunto" class="form-control" placeholder="Asunto" type="text">
					</div>
					<div class="form-group ">
						<label for="message" class="sr-only">Mensaje</label>
						<textarea name="" id="message" cols="30" rows="5" class="form-control" placeholder="Mensaje"></textarea>
					</div>
					<div class="form-group ">
						<input class="btn btn-primary btn-lg" name="contacto" value="¡Enviar Mensaje!" type="submit" > 
					</div>
					</form>
				 </div>

						<?php
				if(isset($_POST['contacto']))
				{
					$name =$_POST['name'];
					$asunto = $_POST['asunto'];
					$mensaje = $_POST['message'];

					$sql = "INSERT INTO `contacto`(`fullname`, `asunto`,`mensaje`) VALUES ('$name','$asunto','$mensaje')" ;

					if(mysqli_query($con,$sql))
					echo"OK";
					
				}
				?>



				</div>

			</div>
		</div>
			</section>
	
	
	<footer id="footer" role="contentinfo">
		<a href="home" class="gotop js-gotop"><i class="icon-long-arrow-up"> </i></a>
		<div class="container">

			
			<div class="">
				<div class="col-md-12 text-center">
					<p>&copy; BARBERSHOPQUIB TODOS LOS DERECHOS SON RESERVADOS.</p>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="social social-circle">
						<li><a href="https://twitter.com/"><i class="icon-twitter"></i></a></li>
						<li><a href="https://www.facebook.com/Stiiwar.Asprilla"><i class="icon-facebook"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UCrbxxhDLCDNRkOaKWSvS2nQ?view_as=subscriber"><i class="icon-youtube"></i></a></li>
						<li><a href="(+57)3183919028"> <i class="icon-whatsapp"></i> </a></li> 
					</ul>
				</div>
			</div>
		</div>
	</footer>
	
	
	<!-- For demo purposes Only ( You may delete this anytime :-) -->
	<div id="colour-variations">
		<a class="option-toggle"><i class="icon-gear"></i></a>
		<h3>Colores Prestablecidos</h3>
		<ul>
			<li>
				<a href="javascript: void(0);" data-theme="style2">
					<span style="background: #329998;"></span>
					<span style="background: #7e7a7b;"></span>
					<span style="background: #f2f2f2;"></span>
				</a>
			</li>
			<li>
				<a href="javascript: void(0);" data-theme="style3">
					<span style="background: #d2c667de;"></span>
					<span style="background: #7e7a7b;"></span>
					<span style="background: #f2f2f2;"></span>
				</a>
			</li>
			<li>
				<a href="javascript: void(0);" data-theme="style4">
					<span style="background: #A4D792;"></span>
					<span style="background: #7e7a7b;"></span>
					<span style="background: #f2f2f2;"></span>
				</a>
			</li>
			
		</ul>
	</div>
	<!-- End demo purposes only -->

	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Counter -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
	<script src="js/jquery.style.switcher.js"></script>
	<script>
		$(function(){
			$('#colour-variations ul').styleSwitcher({
				defaultThemeId: 'theme-switch',
				hasPreview: false,
				cookie: {
		          	expires: 30,
		          	isManagingLoad: true
		      	}
			});	
			$('.option-toggle').click(function() {
				$('#colour-variations').toggleClass('sleep');
			});
		});
	</script>
	<!-- End demo purposes only -->

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

