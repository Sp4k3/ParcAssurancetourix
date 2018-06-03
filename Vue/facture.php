<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<!-- Début du head -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	<!-- Définit le type de caractères utilisés -->
		<meta name="description" content="Parc-Assurancetourix"/>						<!-- Description du site -->
		<meta name="author" content="Thibault COLIN - Ruben DE MACEDO - Alicia MINET"/>	<!-- Nom des développeurs -->

		<!-- Je localise l'emplacement de mon fichier Bootstrap nécessaire à l'utilisation des différentes classes -->
		<!-- <link href="dist/css/bootstrap.css" rel="stylesheet"/> -->		<!-- Appel de Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- Appel de Bootstrap -->
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<link href="../dist/css/styles_assurance.css" rel="stylesheet"/>		<!-- Appel du styles pour le site -->

		<title>AssuranceTourix | Facturation</title>
	</head>

	<!-- Début du body -->
	<body>
		<div>
			<?php
				include_once "header.php";
			?>
		</div> 
		<div class="body_general">
		<?php
		if(isset($adulte) || isset($enfant) || isset($senior))
		{
			echo "Achat de ".$prix_total." € effectué.";
			echo '<META http-equiv="refresh" content="2; URL=../Vue/billets.php">';
		}
		else
		{
			echo "Erreur";
			echo '<META http-equiv="refresh" content="2; URL=../Controleur/controleur_achat_billet.php">';
		}
		?>
		</div>
	</body>
</html>