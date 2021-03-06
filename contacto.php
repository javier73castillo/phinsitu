<?php


$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Por favor intentelo nuevamente.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	$to = "info@phinsitu.online";
	$subject = "Contacto PH";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "phinsitu.online";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Tu mensaje ha sido enviado correctamente!</span>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>pH | vIAJES</title>
	 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	
	<!-- Custom CSS -->
	<link href="css/style.css" rel="stylesheet">
	
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- jQuery and Modernizr-->
	<script src="js/jquery-2.1.1.js"></script>

	
</head>
<body>
<header class="sub-header">
		
		<div class="container text-center">
			<a class="site-branding" href="index.html">
				<h1 class="site-title" >
					PHOTO IN SITU
				</h1>
				<p class="site-description">
					Capturas de viajes recorridos
				</p>
			</a><!-- .site-branding -->
		</div>
		
		<!--Navigation-->
		<div id="menu-wrapper">
			<nav id="menu" class="navbar">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
					</div>
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="index.html">Home</a></li>
							
							<li class="dropdown"><a href="articulos/llanes.html" class="dropdown-toggle" data-toggle="dropdown">Foto Articulo</a>
								<div class="dropdown-menu" >
									<div class="dropdown-inner">
										<ul class="list-unstyled">
											<li><a href="articulos/llanes.html">Asturias | Espa??a</a></li>
											<li><a href="articulos/salkantay.html">Salkantay | Peru</a></li>
											<li><a href="#">Aig??estortes | Espa??a</a></li>
											<li><a href="#">Sintra | Portugal</a></li>
											<li><a href="#">Peratallada | Espa??a</a></li>
											
										</ul>
										
									</div>
								</div>
							</li>
							<li><a href="fotolibro.html">Foto Libro</a></li>
							<li><a href="contacto.html">Contacto</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		
	</header>
	
	<div id="page-content">
		
		<!-----------------Content-------------------->
		<section class="box-content">
			<div class="container">
				<div class="row heading">
					
				</div>
				<div class="row">
					<!--Start Map-->
					
					<!--End Map-->
					<div class="col-md-4 box-item">
						<h3 style="color: dimgrey;">Informaci??n | </h3>
						<span>PH IN SITU es un espacio para compartir articulos y fotograf??as de viaje.

						</span><br> <br>
						<p>Barcelona<br>
							Buenos Aires</p>
						   <p>+34 666165906 <br>
							+54 2364595066 </p>
							<p><a href="https://wa.me/+34666165906"><img src="images/w.png" width="35" height="30" /></a> :: whatsapp</p>
						
						<p>info@phinsitu.online</p>
					</div>
					<div class="col-md-8">
						<h3 style="color: dimgrey;">Formulario de mensajes</h3>
						<form name="form1" method="post" action="contacto.php">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<input type="text" class="form-control input-lg" name="name" id="name" placeholder="Nombre" required="required" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control input-lg" name="email" id="email" placeholder="e-mail" required="required" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control input-lg" name="subject" id="subject" placeholder="Asunto" required="required" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required" placeholder="Mensaje" style="height: 170px;"></textarea>
									</div>						
									<button type="submit" class="btn btn-skin btn-block" name="submitcontact" id="submitcontact">Enviar</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
		
	<footer class="main-footer">
		<div class="wrap-footer">
			<div class="container">
				<ul class="list-inline top-link link">
					<li><a href="https://www.linkedin.com/in/javier-castillo-1752b044/" target="blanck">LinkedIn</a></li>
					<li><a href="https://www.instagram.com/corazon_de_viaje/" target="blanck">Instagram</a></li>
					<li><a href="https://alfinaldeljuego.blogspot.com" target="blanck">Al final del juego</a></li>
					<li><a href="#">Pinterest</a></li>
				</ul>
				<div class="copyright">
					<span>Copyright ?? 2021 - <a href="">Javier Castillo</a></span>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer -->
	
	<!-- JS -->
	<script src="js/bootstrap.min.js"></script>
	
	<script>
		$(function() {
			$('#menu-wrapper').height($("#menu").height());
			
			$('#menu').affix({
				offset: { top: $('#menu').offset().top }
			});
		});
	</script>
	
	
</body>
</html>