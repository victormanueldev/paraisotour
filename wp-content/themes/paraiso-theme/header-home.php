<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo bloginfo(name) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo bloginfo(template_url).'/assets/css/menu.css' ?>" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700" rel="stylesheet">
    <!-- STYLE -->
    <link rel="stylesheet" href="<?php echo bloginfo(template_url).'/assets/css/normalize.css' ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo bloginfo(template_url).'/assets/css/fuentes.css' ?>">
    <link rel="stylesheet" href="<?php echo bloginfo(template_url).'/assets/css/animations.css' ?>">
    <link rel="stylesheet" href="<?php echo bloginfo(template_url).'/assets/css/style-index.css' ?>">
    <link rel="stylesheet" href="<?php echo bloginfo(template_url).'/assets/css/style-general.css' ?>">
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<!-- VueJS Version 2.5.17 -->
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7/dist/sweetalert2.all.min.js"></script>

</head>

<body>
<div class="container-fluid">
<div style="position: relative;
width: 100%;
height: 500px;">

<div class="slider fullscreen" id="app">
		<div class="menu-container">
		<!-- MENU -->
			<div class="menu-container-children">
				<div class="top-menu">
					<div style="position: absolute; width: 100%; height: fit-content; top: 45%;">
						<div class="top-menu-text">Los mejores precios con todos los beneficios incluídos:</div>
						<a class="top-menu-item item1" data-toggle="tooltip" data-placement="top" title="La Comodidad"></a>
						<a class="top-menu-item item2" data-toggle="tooltip" data-placement="top" title="Atención Médica Profesional"></a>
						<a class="top-menu-item item3" data-toggle="tooltip" data-placement="top" title="Espectacular Alimentación"></a>
						<a class="top-menu-item item4" data-toggle="tooltip" data-placement="top" title="Espectacular Alimentación"></a>
						<a class="top-menu-item item5" data-toggle="tooltip" data-placement="top" title="Los Mejores Lugares para Viajar"></a>
						<a class="top-menu-item item6" data-toggle="tooltip" data-placement="top" title="Grandiosos Hospedajes"></a>
						<a class="top-menu-item item7" data-toggle="tooltip" data-placement="top" title="Excelente Transporte"></a>
					</div>
					<p style="display: none" class="text-bottom" >
						<?php 
							$index = 0;
							//Recorre el Array de posts
							foreach($posts as $post):
								echo "{{posts_title[".$index."]='".$post->post_title."'}}"; //Asigna los titulos de los posts a la varible JS
								echo "{{posts_id[".$index."]='".$post->ID."'}}";//Asigna los ID de los posts a la varible JS
								$index++;
							endforeach;
							?>
					</p>
				</div>
				<div class="top-menu-left">
					<a class="menu-desk-item" id="AlertSingUp" style="width: 120px !important;position: relative;"><i class="material-icons" style="position: absolute; top: 8px; left: -2px;">account_circle</i>Registrarse</a>
				</div>
				<div class="logo-center"></div>
				<a class="mobile-menu sidenav-trigger" data-target="slide-out" class="sidenav-trigger">
					<i class="material-icons" style="font-size: 40px;">menu</i>
				</a>
				<div class="menubar">
					<div class="menu items">
						<div class="center-menu-items">
							<a class="menu-desk-item dactive" href="http://localhost/paraisotour/">Inicio</a>
							<a class="menu-desk-item" href="http://localhost/paraisotour/?cat=3">Pasadías</a>
							<a class="menu-desk-item" href="http://localhost/paraisotour/?cat=4">Excursiónes</a>
							<a class="menu-desk-item" href="http://localhost/paraisotour/?cat=2">Promociones</a>
							<a class="menu-desk-item" href="http://localhost/paraisotour/?page_id=49">Contacto</a>
						</div>
					</div>
					<div class="menu  items2"></div>

					<div class="menu">
						<div class="center-search-items">
							<div class="search" style="z-index: 15;">
								<input id="idsearch" type="text" class="search-input" placeholder="  Destino,pasadía, excursión" v-model="searchInput">
								<button type="submit" class="search-button">
									<i class="material-icons" style="position: absolute;left: 4px;top: 1px;">search</i>
								</button>
								<div class="results res-active">
									<a id="close-res" style="margin-left: 90%;">
										<i class="material-icons" style="position: absolute;left: 4px;top: 1px;">close</i>
									</a>
									<div v-for="post in filteredPosts" class="res-item">
										<a v-bind:href="post.url">{{post.title}}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="menu items1">
						<div style="text-align: center; position: relative; width: fit-content; height: fit-content; width: -moz-fit-content; bottom: -50px; margin: 0 auto;  background-color: #ffffffc2; border-radius: 25px; padding: 5px;">
							<div class="top-menu-text" style="display: block !important; color: #484848 !important">Los mejores precios con
								todos los beneficios incluídos:</div>
							<a class="top-menu-item item1"></a>
							<a class="top-menu-item item2"></a>
							<a class="top-menu-item item3"></a>
							<a class="top-menu-item item4"></a>
							<a class="top-menu-item item5"></a>
							<a class="top-menu-item item6"></a>
							<a class="top-menu-item item7"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END MENU -->
		<!-- SLIDE -->
		<ul class="slides">
			<li>
				<img src="<?php echo bloginfo(template_url).'/assets/slides/1.jpg' ?>"> <!-- random image -->
				<div class="caption center-align">
					<!-- <h3>1</h3>
					<h5 class="light grey-text text-lighten-3">1</h5> -->
				</div>
			</li>
			<li>
				<img src="<?php echo bloginfo(template_url).'/assets/slides/2.jpg' ?>"> <!-- random image -->
				<div class="caption right-align image-caption">
					<img src="<?php echo bloginfo(template_url).'/assets/icons/familia.png'; ?>" class="cap-image">
				</div>
			</li>
			<li>
				<img src="<?php echo bloginfo(template_url).'/assets/slides/3.jpg' ?>"> <!-- random image -->
				<div class="caption right-align image-caption1">
					<img src="<?php echo bloginfo(template_url).'/assets/slides/imagen2sf.png' ?>" class="cap-image1">
				</div>
			</li>
			<li>
				<img src="<?php echo bloginfo(template_url).'/assets/slides/4.jpg' ?>"> <!-- random image -->
				<div class="caption left-align">

				</div>
			</li>
		</ul>
		<!-- END SLIDE -->
</div>

<div id="slide-out" class="sidenav">
	<div>
		<div class="user-view">
			<div class="background">
				<img style="width: 80%;" src="<?php echo bloginfo(template_url).'/assets/icons/logo.png' ?>">
			</div>
			<!-- <a class="user-image"><i class="material-icons" style="font-size: 60px; color: white;">account_circle</i></a> -->
			<!-- <a class="user-info"><span class="white-text name">Usuario</span>
			<span class="white-text email">usuario@gmail.com</a>
			</a> -->
		</div>
			<a class="menu-desk-item" style="width: 120px !important;position: relative;">
				<i class="material-icons" style="position: absolute; top: 8px; left: -2px;">account_circle</i>Registrase</a>
			<br>
			<a class="menu-mobile-item mactive" href="http://localhost/paraisotour/">Inicio</a>
			<a class="menu-mobile-item" href="http://localhost/paraisotour/?cat=3">Pasadías</a>
			<a class="menu-mobile-item" href="http://localhost/paraisotour/?cat=4">Excursiónes</a>
			<a class="menu-mobile-item" href="http://localhost/paraisotour/?cat=2">Promociones</a>
			<a class="menu-mobile-item" href="http://localhost/paraisotour/?page_id=49">Contacto</a>
	</div>

</div>

</div>