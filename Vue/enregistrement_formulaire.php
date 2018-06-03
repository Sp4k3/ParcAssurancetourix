<!DOCTYPE html>
<html>
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
		<title>AssuranceTourix | Parc d'attractions</title>
	</head>
	<body>
		<?php 

		if(empty($nom)) // Si le nom n'est pas rempli
		{
			echo "Erreur vous n'avez pas saisi de nom";
			echo '<META http-equiv="refresh" content="1; URL=../indexFormulaire.php?erreur=miss_nom&prenom='.$prenom.'&mail='.$mail.'">';
		}

		elseif(empty($prenom)) // Si le prénom n'est pas rempli
		{
			echo "Erreur vous n'avez pas saisi de prénom";
			echo '<META http-equiv="refresh" content="1; URL=../indexFormulaire.php?erreur=miss_prenom&nom='.$nom.'&mail='.$mail.'">';
		}

		elseif(empty($mail)) //Si le mail n'est pas rempli
		{
			echo "Erreur vous n'avez pas saisi votre mail";
			echo '<META http-equiv="refresh" content="1; URL=../indexFormulaire.php?erreur=miss_mail&nom='.$nom.'&prenom='.$prenom.'">';
		}

		elseif(empty($mdp)) //Si le mot de passe n'est pas rempli
		{
			echo "Erreur vous n'avez pas saisi votre mot de passe";
			echo '<META http-equiv="refresh" content="1; URL=../indexFormulaire.php?erreur=miss_mdp&nom='.$nom.'&prenom='.$prenom.'&mail='.$mail.'">';
		}
		elseif (!preg_match("/[aA-zZ0-9][aA-zZ0-9][aA-zZ0-9][aA-zZ0-9]/", $mdp)) //Si le mot de passe ne correspond pas
		{
			echo "Erreur vous n'avez pas saisi de mot de passe valide";
			echo '<META http-equiv="refresh" content="1; URL=../indexFormulaire.php?erreur=incorrect_mdp&nom='.$nom.'&prenom='.$prenom.'&mail='.$mail.'">';
		}
		else
		{

			if(isset($maj))
			{
				echo "<p>mise à jour effectuée</p>";
				//Retour automatique au formulaire
				echo '<META http-equiv="refresh" content="1; URL=../Controleur/controleur_connexion.php">';
			}
			elseif(isset($ajout))
			{
				echo "<p>Transmission effectuée</p>";
				//Retour automatique au formulaire
				echo '<META http-equiv="refresh" content="1; URL=../Controleur/controleur_connexion.php">';
			}
			else
			{
				echo "<p>ERREUR : Pas de transmission à la BDD</p>";
				//Retour automatique au formulaire
				echo '<META http-equiv="refresh" content="1; URL=../Controleur/indexFormulaire.php">';
			}

			
		}
		
		?>
	</body>
</html>