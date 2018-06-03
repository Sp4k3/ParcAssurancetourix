<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<!-- Début du head -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	<!-- Définit le type de caractères utilisés -->
		<meta name="description" content="Parc-Assurancetourix"/>						<!-- Description du site -->
		<meta name="author" content="Thibault COLIN - Ruben DE MACEDO - Alicia MINET"/>	<!-- Nom des développeurs -->

		<!-- Je localise l'emplacement de mon fichier Bootstrap nécessaire à l'utilisation des différentes classes -->
		<link href="dist/css/bootstrap.css" rel="stylesheet"/>		<!-- Appel de Bootstrap -->
		<link href="dist/css/styles_assurance.css" rel="stylesheet"/>		<!-- Appel du styles pour le site -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- Appel de Bootstrap -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!-- Appel de jquery-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-- Appel de Bootstrap js-->
		<script src="dist/sweetalert.min.js"></script>	<!-- animation de l'alert avec sweetalert -->
		<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
		
		<!-- Titre du site -->
		<title>AssuranceTourix | Connexion</title>
	</head>

	<body>
		<div class="div_deconnexion">
			<h1>Connexion en cours...</h1>
		</div>
		<div class="container">
			<div class="progress progress-striped active">
				<div class="progress-bar"></div>
			</div>
			<div id="pourcentage" class="pull-right"></div>
		</div>
		
		<!-- Fonction annimant la barre de chargement -->
		<script>
			function timer(n)
			{
				$(".progress-bar").css("width", n + "%");
				$("#pourcentage").text(n + "%");
				if(n < 100) 
				{
					setTimeout(function() 
					{
						timer(n + 10);
					}, 40);
				}
			}
			$(function ()
			{
				$(document).ready(function()
				{
					timer(0);
				});
			});
		</script>
		<META http-equiv="refresh" content="1; URL=../Controleur/controleur_parcours.php">
	</body>
</html>