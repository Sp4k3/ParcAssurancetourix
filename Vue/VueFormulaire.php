<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<!-- Début du head -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	<!-- Définit le type de caractères utilisés -->
		<meta name="description" content="Parc-Assurancetourix"/>						<!-- Description du site -->
		<meta name="author" content="Thibault COLIN - Ruben DE MACEDO - Alicia MINET"/>	<!-- Nom des développeurs -->

		<!-- Je localise l'emplacement de mon fichier Bootstrap nécessaire à l'utilisation des différentes classes -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- Appel de Bootstrap -->
		<!-- <link href="dist/css/bootstrap.css" rel="stylesheet"/> -->		<!-- Appel de Bootstrap -->
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<link href="dist/css/styles_assurance.css" rel="stylesheet"/>		<!-- Appel du styles pour le site -->
		<link href="dist/css/type.css" rel="stylesheet"/>

		<title>AssuranceTourix | Formulaire</title>
	</head>

	<body>

		<form action="Controleur/enregistrement_formulaire.php" method="POST">
			<div class="container well body_general">
				<?php	
					//verification erreur nom
					if (isset($_GET['erreur']) && ($_GET['erreur'] == "miss_nom"))
					{
						include_once('Vue/contactOutFname.php');
					}
					//verification erreur prenom
					elseif (isset($_GET['erreur']) && ($_GET['erreur'] == "miss_prenom"))
					{
						include_once('Vue/contactOutName.php');
					}
					else
					{
						//Sinon inclure page contact
						include_once('Vue/contact.php');
					}

					
					//verification erreur mail
					if (isset($_GET['erreur']) && ($_GET['erreur'] == "miss_mail"))
					{
						include_once('Vue/insOutMail.php');
					}

					//verification erreur mdp
					elseif (isset($_GET['erreur']) && ($_GET['erreur'] == "miss_mdp"))
					{
						include_once('Vue/insOutMdp.php');
					}
					elseif (isset($_GET['erreur']) && ($_GET['erreur'] == "incorrect_mdp"))
					{
						include_once('Vue/incorrectMdp.php');
					}
					else
					{
						//sinon inclure page inscription
						include_once('Vue/inscription.php');
					}

					include_once('Vue/donneesPers.php');
				?>
			</div>
		</form>
	</body>
</html>

