<?php
	// connexion à la BDD
	include_once "./connexion_bdd_assurancetourix.php";
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

	include "../Vue/connexion.php";
	include('../Modele/modele_connexion.php');

	if (isset($_POST['login'], $_POST['mdp']))
	{
		$mdp = $_POST['mdp'];
		$email = $_POST['login'];

		$res=rechercheCompte($email, $mdp);

		if(!empty($res[0]['id_personne']))
		{
			
			//Variable session
			$_SESSION['login'] = $email;
			$_SESSION['id_personne'] = $res[0]['id_personne'];
			$_SESSION['nom'] = $res[0]['nom'];
			$_SESSION['prenom'] = $res[0]['prenom'];
			$_SESSION['annee'] = date("Y");

			include('../Vue/recherche_compte.php');
		}
		else
		{
			echo "<div style=\"padding-top : 200px; text-align : center;\"><h1>Votre identifiant ou votre mot de passe n'est pas correct</h1></div><META http-equiv=\"refresh\" content=\"0; URL=./controleur_connexion.php\">"; 
		}
	}
?>

