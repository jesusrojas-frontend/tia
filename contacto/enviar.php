<?php

/****************************************************************
Recibe los datos ingresados
****************************************************************/
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentario = $_POST['mensaje'];

if( empty($nombre) || empty($email) || empty($comentario) ) {

	$error = true;

}


/****************************************************************
Aquí debes ingresar el asunto del mail
****************************************************************/
$subject = 'Contacto desde tu pagina de: ' . $nombre ;
$comentario = stripcslashes($comentario);



/****************************************************************
Aquí se genera el cuerpo del mensaje
****************************************************************/
$mensaje = "De: $nombre \n
E-mail: $email \n
Mensaje: $comentario \n
\n";

$from = "From: $email\r\n";



/****************************************************************
ingresa mail receptor
****************************************************************/

if( !$error ) {
	mail("labsantateresadelosandes@gmail.com", $subject, $mensaje, $from);
}
?>
<head>
	<meta charset="UTF-8">
	<title>Contactos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/font/fuentes.css">
	<link rel="stylesheet" href="/css/estilos.css">
	<link rel="stylesheet" href="/css/contacto.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><img src="/img/logo.png" alt="logo"></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="/">Inicio</a></li>
        <li><a href="/quienes-somos">Información</a></li>
        <li><a href="/preguntas-frecuentes">Preguntas</a></li>
        <li><a href="/galeria">Galeria</a></li>
        <li><a href="/blog">Blog</a></li>
        <li><a href="/contacto">Contacto</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
	</nav>
	<header><div class="jumbotron">
	<div class="container">
	    <div class="medio">
	      <h1>CONTACTO</h1>
	    </div>
  </header>
  <section class="contenedor">
  	<div class="container">
  	<?php if( $error ) { ?>
  		<div class="row">
  			<div class="col-md-6 formulario">
  				<h1>Formulario</h1>
  				<form action="enviar.php" method="post">

					<div class="col-md-12">
						<div class="form-group">
							<input type="text" placeholder="Nombre" class="form-control" required name="nombre" id="nombre" >
						</div>
					</div><!-- Nombre -->
					<div class="col-md-12">
						<div class="form-group">
							<input type="text" placeholder="Asunto" class="form-control" required  name="asunto" id="asunto">
						</div>
					</div><!-- Asunto -->


					<div class="col-md-12">
						<div class="form-group">
							<input type="email" placeholder="Email" class="form-control" required name="email" id="email">
						</div>
					</div><!-- Email -->
				
					<div class="col-md-12">
						<div class="form-group">
							<textarea cols="30" rows="5" placeholder="Mensaje" class="form-control b" required name="mensaje" id="mensaje"></textarea>
						</div>
					</div><!-- Comentario -->
				
					<button type="submit" class="btn">Enviar</button>
				</form>
  			</div>
  			<div class="col-md-6 mapa">
  				<h1>Mapa</h1>
  				 <div class="mapa"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d982.0488563210605!2d-69.28965517084883!3d10.083067699549655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e8767879883c9c5%3A0x8100459705ca17fe!2sCalle+Guri%2C+Barquisimeto+3001%2C+Lara!5e0!3m2!1ses!2sve!4v1494103010131" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe></div>
  			</div>
  		</div>
  	</div>
  	<?php } else { ?>

          <div class="row">
          	<div class="informacion">
          		<p>Gracias por contactarte con nosotros, responderemos a su solicitud con la mayor brevedad posible</p>
          	</div>
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>

        <?php } ?>
  </section>
  <footer>
  	<div class="top">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>Siguenos</h3>
            <ul class="redes">
              <!--<li><a href="#"><i class="fa fa-google"></i></a></li>-->
              <li><a href="http://www.facebook.com/lab.santateresa"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/labsantateresa"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.instagram.com/lab.santateresa/"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
          <div class="col-md-4 soporte">
            <h3>Soporte</h3>
            <ul>
              <li> <a href="/preguntas-frecuentes">FAQs</a></li>
              <li> <a href="/contacto">Contacto</a></li>
              <li> <a href="/blog">Blog</a></li>
            </ul>
          </div>
          <div class="col-md-4 direccion">
            <h3>Direccion</h3>
            <ul>
              <li>labsantateresadelosangeles@gmail.com</li>
              <li class="ubicacion">Urb. Patarata II Calle guri casa nro 280</li>
              <li>+58 0251-719-1923 / 0251-0514521</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom">
      <div class="container">
        <p>Copyright &copy; Diseño y desarrollo por <a href='http://jesusrojas.com.ve' target='_blank'>Jesús Rojas</a></p>
      </div>
    </div>
  </footer>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107408782-1"></script>
  <script src="/js/google.js"></script>
</body>
</html>