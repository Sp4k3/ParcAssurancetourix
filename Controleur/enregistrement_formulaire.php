<?php
include "connexion_bdd_assurancetourix.php";

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$mail=$_POST['mail'];
$mdp=$_POST['mdp'];
 
if(isset($_POST['taille']))
{
	$taille=$_POST['taille'];
}else{
	$taille='';
} 

if(isset($_POST['fortes']))
{
	$preferences='sensations fortes';
}elseif(isset($_POST['moderees'])){
	$preferences='sensations modérées';
}elseif(isset($_POST['douce'])){
	$preferences='sensations enfant';
}else{
	$preferences='';
}

if(isset($_POST['budget']))
{
	$budget=$_POST['budget'];
}else{
	$budget='';
}

include ('../Modele/fonctions_enregistrement.php'); // chargement du modèle

$donnees = getDonneesNomPrenom($nom, $prenom);
			
if($donnees)
{
	majClient(getId($nom, $prenom), $nom, $prenom, $budget, $preferences, $taille, $mail, $mdp);
	$maj=true;

}
else
{
	insertClient($nom, $prenom, $budget, $preferences, $taille, $mail, $mdp);
	$ajout=true;

}

include ('../Vue/enregistrement_formulaire.php');  //redirige vers la vue