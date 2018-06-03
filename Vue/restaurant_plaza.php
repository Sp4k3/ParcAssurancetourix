<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<!-- Début du head -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	<!-- Définit le type de caractères utilisés -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/> 					<!-- Rend IE compatible -->
		<meta name="viewport" content="width=device-width, initial-scale=1"/>	<!-- Permet de définir la taille de l'affichage du site au début -->
		<meta name="description" content="Parc-Assurancetourix"/>						<!-- Description du site -->
		<meta name="author" content="Thibault COLIN - Ruben DE MACEDO - Alicia MINET"/>	<!-- Nom des développeurs -->

		<!-- Je localise l'emplacement de mon fichier Bootstrap nécessaire à l'utilisation des différentes classes -->
		<!-- <link href="dist/css/bootstrap.css" rel="stylesheet"/> -->		<!-- Appel de Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- Appel de Bootstrap -->
		<link href="assets/css/animations.css" rel="stylesheet"/>	<!-- Appel des animations css -->
		<link href="../dist/css/styles_assurance.css" rel="stylesheet"/>		<!-- Appel du styles pour le site -->
		<!-- Titre du site -->
		<title>AssuranceTourix | Restaurant polynesia</title>
	</head>

	<!-- Début du body -->
	<body>
		<div class="bloc-principal">
			<?php
				include_once "./header.php";
			?>
		</div>
		<div class="carte_restaurant">
			<a class="btn btn-success" href="../images/restaurant_plaza_garden.pdf" title="Pdf">Télécharger la carte (PDF)</a>
			<div class="row">
				<img src="../images/restaurant_plaza_garden.PNG">
			</div>
		</div>
	</body>
</html>