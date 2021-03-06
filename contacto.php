<!DOCTYPE html>
<html>

	<head>

		<title>Recetas Abuela | Contacto</title>
		
		<meta charset="utf-8">
		
		<meta name="description" content="Recetas">
		
		<meta name="keywords" content="Recetas Abuela">
    	
    	<link rel="shortcut icon" href="images/abuela.png">
		
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

	</head>

	<body>

		<div class="text-center p-3 mb-2 bg-danger text-white">
			<img src="images/abuela.png" class="rounded img-fluid" width="50" height="50"><a class="navbar-brand text-light" href="index.html">Cocina con la Abuela</a>
		</div>
		
		<nav class="navbar navbar-expand-sm navbar-light bg-white">
			<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbars03" aria-controls="navbars03" aria-expanded="false" aria-label="Toggle navigation">
				Navegaci&oacute;n &nbsp;<span class="navbar-toggler-icon"></span> 
			</button>

			<div class="collapse navbar-collapse mx-auto" id="navbars03"">
				<ul class="navbar-nav mx-auto">
				        <a class="nav-link" href="index.html">Inicio</a>
				    </li>

				    <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				        Recetas
				        </a>
				           
					    <div class="dropdown-menu" aria-labelledby="dropdown03">
					        <a class="dropdown-item" href="entrantes/index.html">Entrantes</a>
					        <a class="dropdown-item" href="plato-principal/index.html">Plato Principal</a>
					        <a class="dropdown-item" href="postres/index.html">Postres</a>
					    </div>
				    </li>

				    <li class="nav-item active">
				        <a class="nav-link" href="contacto.php">Contacto <span class="sr-only">(current)</span></a>
				    </li>
				          
				    <li class="nav-item">
				        <a class="nav-link" href="creditos.html">Cr&eacute;ditos</a>
				    </li>
				        
				</ul>
			</div>
		</nav>

		<div class="bg-light text-dark">
			<hr class="my-1">
			<div class="p-3">
				<h1>Contacto</h1>
				<div class="p-3">
					<?php  
					require 'email.php';
					email();
					?>
					<div class="alert alert-secondary" role="alert">
					Contacte con nosotros a través del formulario indicando su nombre, correo de contacto y qué necesita.
					<p>Contactaremos con usted y le facilitaremos la información que usted necesite.</p>
					</div>
				</div>
				<form action="contacto.php" method="post">
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label>Nombre</label>
				      <input type="text" class="form-control" name="nombre" placeholder="Nombre">
				    </div>
					    <div class="form-group col-md-6">
				      <label>Email</label>
				      <input type="email" class="form-control" name="email" placeholder="Email">
				    </div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-4">
				      <label>Motivo de la consulta</label>
				      <select class="form-control" name="motivo">
				        <option selected>Duda</option>
				        <option>¡Nueva Receta!</option>
				        <option>Otros</option>
				      </select>
				    </div>
				</div>
				<div class="form-row">	
					<div class="form-group col-md-12">
    					<label>Escriba su consulta</label>
    					<textarea class="form-control" rows="3" name="consulta"></textarea>
  					</div>
  				</div>
				  <button type="submit" class="btn btn-primary">Enviar</button>
				</form>
			</div>
		</div>

	 	<div class="navbar navbar-default navbar-fixed-bottom bg-dark text-light">

		      	<p class="navbar-text pull-left">© 2019 - Lenguaje de Marcas.
		           <a href="https://informatica.iesgrancapitan.org/" target="_blank" >IES Gran Capitán</a>
		      	</p>
		    </div>
	</body>

</html>