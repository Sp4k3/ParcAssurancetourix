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

		<link href="../dist/css/styles_assurance.css" rel="stylesheet"/> <!-- appel de mon style -->
		<!-- Titre du site -->
		<title>AssuranceTourix | Restaurants</title>
	</head>

	<!-- Début du body -->
	<body>
		<?php
				include_once "header.php";
		?>

		<div class="container body_restaurants">
		<?php
			for($i=0; $i<$nombre_restaurants; $i++)
			{
			?>
				<div class="col-md-7 images_restaurant">
					<img src="../images/<?php echo $tableau_images[$i];?>.jpg" alt="" width="50%" align="right">
				</div>
				<div class="col-md-5 texte_annexe">
					<a href="../Vue/<?php echo $tableau_images[$i];?>.php"><h2><?php echo $res[$i]['nom']?></h2></a>
					<div>
						<span >
							<?php echo $res[$i]['description']?>
						</span>
					</div>
				</div>
			<?php
			}
			?>
		</div>
		<div class="footer3">
			<?php
				// Footer
				include_once "footer.php";
			?>
		</div>
	</body>