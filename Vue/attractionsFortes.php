<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<!-- Début du head -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	<!-- Définit le type de caractères utilisés -->
		<meta name="description" content="Parc-Assurancetourix"/>						<!-- Description du site -->
		<meta name="author" content="Thibault COLIN - Ruben DE MACEDO - Alicia MINET"/>	<!-- Nom des développeurs -->

		<!-- Je localise l'emplacement de mon fichier Bootstrap nécessaire à l'utilisation des différentes classes -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- Appel de Bootstrap -->
		<link href="../dist/css/styles_assurance.css" rel="stylesheet"/>			<!-- Appel du styles pour le site -->

		<script src="assets/js/jquery.js"></script>

		
		<!-- Titre du site -->
		<title>AssuranceTourix | Attractions fortes</title> 
	</head> 

	<body>
		<div class="container-fluid">
			<div>
				<?php
					include_once "../Vue/header.php";
				?>
			</div>

			<div class="body_attractions">
				<?php
				for($i=0; $i<$nombre_attractions; $i++)
				{
				?>
					<div class="col-md-7 images_attraction">
						<img src="../images/<?php echo $tableau_images[$i];?>.jpg" alt="" width="50%" align="right">
					</div>
					<div class="col-md-5 texte_annexe">
						<h2><?php echo $res[$i]['nom']?></h2>
						<div>
							<span>Taille minimum : <?php echo $res[$i]['taille']?> cm</span><br>
							<span>Attraction forte, À ne pas rater</span><br>
							<span><a href="#<?php echo $tableau_images[$i];?>">En savoir plus</a></span>
						</div>
						<span id="<?php echo $tableau_images[$i];?>">
							<?php echo $res[$i]['description']?>
							<a href="#">Fermer</a>
						</span>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</body>
</html>