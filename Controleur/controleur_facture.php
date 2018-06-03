<?php
	include_once "connexion_bdd_assurancetourix.php";
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    if(isset($_POST["nombre_adulte"]))
		$nombre_adulte=$_POST["nombre_adulte"];
	else
		$nombre_adulte=0;

	if(isset($_POST["nombre_enfant"]))
		$nombre_enfant=$_POST["nombre_enfant"];
	else
		$nombre_enfant=0;

	if(isset($_POST["nombre_senior"]))
		$nombre_senior=$_POST["nombre_senior"];
	else
		$nombre_senior=0;

	if(isset($_POST["prix_adulte"]))
		$prix_adulte=$_POST["prix_adulte"];
	else
		$prix_adulte=0;

	if(isset($_POST["prix_enfant"]))
		$prix_enfant=$_POST["prix_enfant"];
	else
		$prix_enfant=0;

	if(isset($_POST["prix_senior"]))
		$prix_senior=$_POST["prix_senior"];
	else
		$prix_senior=0;

	if(isset($_POST["nombre_total"]))
		$nombre_total=$_POST["nombre_total"];
	else
		$nombre_total=0;

	if(isset($_POST["prix_total"]))
		$prix_total=$_POST["prix_total"];
	else
		$prix_total=0;

	include('../Modele/modele_facture.php');

	$date = date("Y-m-d");

	$res=promotion($date);

	if(!empty($res['id_promotion']))
	{
		$id_promotion=$res['id_promotion'];
	}
	else
	{
		$id_promotion=0;
	}

	while($nombre_adulte>0)
	{
		ajout_billet_adulte($_SESSION['id_personne'], $id_promotion);
		$adulte=true;

		$nombre_adulte--;
	}

	while($nombre_enfant>0)
	{
		ajout_billet_enfant($_SESSION['id_personne'], $id_promotion);
		$enfant=true;

		$nombre_enfant--;
	}

	while($nombre_senior>0)
	{
		ajout_billet_enfant($_SESSION['id_personne'], $id_promotion);
		$senior=true;

		$nombre_senior--;
	}

	include('../Vue/facture.php');
?>