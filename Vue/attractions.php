<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<!-- Début du head -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	<!-- Définit le type de caractères utilisés -->
		<meta name="description" content="Parc-Assurancetourix"/>						<!-- Description du site -->
		<meta name="author" content="Thibault COLIN - Ruben DE MACEDO - Alicia MINET"/>	<!-- Nom des développeurs -->

		<!-- Je localise l'emplacement de mon fichier Bootstrap nécessaire à l'utilisation des différentes classes -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- Appel de Bootstrap -->
		<link href="../dist/css/styles_assurance.css" rel="stylesheet"/>		<!-- Appel du styles pour le site -->

		<title>AssuranceTourix | Attractions</title>
	</head>

	<!-- Début du body -->
	<body>
			<?php
				include_once "../Vue/header.php";
			?>
		<div class="container">
			<div class="col-xs-12 AttractionsFortes">
				<div class="col-md-3 div_temeraire">
					<span><a href="../Controleur/controleur_attractionsFortes.php" class="color_a">Pour les plus téméraires</a></span>
					<span class="span_attraction"><a href="javascript:alert('Conseils : \n\nPour votre sécurité, vous devez être en bonne santé et ne pas souffrir d’hypertension, de problèmes cardiaques, dorsaux ou cervicaux, de mal des transports ni autres problèmes de santé susceptibles d’être aggravés. Les futures mamans ne doivent pas prendre part à ces attractions.');">Contraintes physiques</a></span>
				</div>
				<div class="col-md-9 div_image_attractions">
					<img src="../images/ImageAttractionsFortes.jpg" width="50%">
				</div>
			</div>

			<div class="col-xs-12 AttractionsFamilles">
				<div class="col-md-9 div_image_attractions">
					<img src="../images/AttractionsFamille.jpg" width="50%" align="right">
				</div>
				<div class="col-md-3 div_attractions">
					<span><a href="../Controleur/controleur_attractionsFamille.php" class="color_a">Pour la famille</a></span>
				</div>
			</div>

			<div class="col-xs-12 AttractionsPetits">
				<div class="col-md-3 div_attractions">
					<span><a href="../Controleur/controleur_attractionsPetits.php" class="color_a">Pour les plus petits</a></span>
				</div>
				<div class="col-md-9 div_image_attractions">
					<img src="../images/AttractionsPetits.jpg" width="50%">
				</div>
			</div>
		</div>
		<div class="footer3">
			<?php
				// Footer
				include_once "./footer.php";
			?>
		</div>
	</body>
</html>