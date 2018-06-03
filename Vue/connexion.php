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
		<link href="../dist/css/styles_assurance.css" rel="stylesheet"/>		<!-- Appel du style pour le site -->
		<link href="../dist/css/style_connexion.css" rel="stylesheet"/>     <!-- Appel du style pour cette page -->

		
		<!-- Titre du site -->
		<title>AssuranceTourix | Parc d'attractions</title>
	</head>
	<body>
		<?php
			include_once("header.php");
		?>
		<div class="container" id="div_connexion">
			<div class="connexion">
				<section>
					<form class="form-signin" action="../Controleur/controleur_connexion.php" method="post">
						<h2 class="form-signin-heading">Connexion à <img src="../images/logo.png" alt="logo assurancetourix" title="Logo du parc" width="20%"/></h2>
							<label for="inputEmail" class="sr-only">Login</label>
							<input type="text" name="login" id="inputEmail" class="form-control" placeholder="Identifiant" required autofocus />
							
							<label for="inputPassword" class="sr-only" >Mot de passe</label>
							<input type="password" name="mdp" id="inputPassword" class="form-control" placeholder="Mot de passe" required />
						<button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
					</form>
				</section>
			</div>
		</div>
	</body>
</html>