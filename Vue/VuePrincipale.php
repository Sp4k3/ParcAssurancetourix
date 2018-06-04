<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<!-- Début du head -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	<!-- Définit le type de caractères utilisés -->
		<meta name="description" content="Parc-Assurancetourix"/>						<!-- Description du site -->
		<meta name="author" content="Thibault COLIN - Ruben DE MACEDO - Alicia MINET"/>	<!-- Nom des développeurs -->

		<!-- Je localise l'emplacement de mon fichier Bootstrap nécessaire à l'utilisation des différentes classes -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- Appel de Bootstrap -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!-- Appel de jquery-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-- Appel de Bootstrap js-->
		<script src="dist/sweetalert.min.js"></script>	<!-- animation de l'alert avec sweetalert -->
		<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">

		<!-- Mon carousel ne marche pas avec ces fichiers 
		<link href="dist/css/bootstrap.min.css" rel="stylesheet"/>		
		<script src="dist/js/bootstrap.min.js"></script>		
		<script src="assets/js/jquery.js"></script>	 -->	

		<link href="dist/css/styles_assurance.css" rel="stylesheet"/> <!-- appel de mon style -->

		
		<!-- Titre du site -->
		<title>AssuranceTourix | Parc d'attractions</title>
	</head>

	<!-- Début du body -->
	<body>
		<div class="col-md-offset-4 col-md-4 col-md-offset-4 col-xs-12 titre_carou">
			<h2 class="title">Les attractions</h2>
			<p class="subtitle">Des sensations pour tous !</p>
		</div>
		<div class="container container_carousel">
			<div id="attractions" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#attractions" data-slide-to="0" class="active"></li>
					<li data-target="#attractions" data-slide-to="1"></li>
					<li data-target="#attractions" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">
						<img src="images/ImageAttractionsFortes.jpg" alt="rapidux & furiux" width="1200" height="500">
						<div class="carousel-caption">
							<h3><a href="./Vue/attractionsFortes.php#rapidux" class="caption_carou">Rapidux & Furiux</a></h3>
							<p class="description_carou">Montez à bord de Rapidux, la catapulte la plus incontrôlable !</p>
						</div>
					</div>
					<div class="item">
						<img src="images/AttractionsFamille.jpg" alt="Minix" width="1200" height="500">
						<div class="carousel-caption">
							<h3><a href="./Vue/attractionsFamille.php" class="caption_carou">Minix</a></h3>
							<p class="description_carou">Parcourez la Gaule à bord des wagonnets de Minix</p>
						</div>
					</div>
					<div class="item">
						<img src="images/AttractionsPetits.jpg" alt="Canoes" width="1200" height="500">
						<div class="carousel-caption">
							<h3><a href="./Vue/attractionsPetits.php" class="caption_carou">Canos</a></h3>
							<p class="description_carou">En route pour la Polynésie gauloise !</p>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#attractions" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#attractions" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>

		<div class="col-md-offset-4 col-md-4 col-md-offset-4 col-xs-12 titre_carou2">
			<h2 class="title">Les restaurants</h2>
			<p class="subtitle">Pour petites et grosses faims</p>
		</div>
		<div class="container container_carousel">
			<div id="restaurants" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#restaurants" data-slide-to="0" class="active"></li>
					<li data-target="#restaurants" data-slide-to="1"></li>
					<li data-target="#restaurants" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">
						<img src="images/restaurant_du_lac.jpg" alt="restaurant du lac" width="1200" height="500">
						<div class="carousel-caption">
							<h3><a href="./Vue/restaurants.php" class="caption_carou">Le restaurant du lac</a></h3>
							<p class="description_carou">Bienvenue dans le restaurant préféré d'Obélix...</p>
						</div>
					</div>
					<div class="item">
						<img src="images/restaurant_taverne.jpg" alt="restaurant la taverne" width="1200" height="500">
						<div class="carousel-caption">
							<h3><a href="./Vue/restaurants.php" class="caption_carou">La taverne</a></h3>
							<p class="description_carou">Pour faire ripaille dans une chaleureuse ambiance gauloise</p>
						</div>
					</div>
					<div class="item">
						<img src="images/restaurant_polynesia.jpg" alt="restaurant polynesia" width="1200" height="500">
						<div class="carousel-caption">
							<h3><a href="./Vue/restaurants.php" class="caption_carou">Polynesia</a></h3>
							<p class="description_carou">La Polynésie gauloise à porté d'assiette !</p>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#restaurants" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#restaurants" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>

		
		<div class="footer3">
			<?php
				// Footer
				include_once "./Vue/footer.php";
			?>
		</div>
	</body>
