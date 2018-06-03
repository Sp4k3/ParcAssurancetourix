<?php
	include_once "connexion_bdd_assurancetourix.php";
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	
	$date = date("Y-m-d");

	$nombre_adulte=$_POST["select_quantite_adulte"];
	$nombre_enfant=$_POST["select_quantite_enfant"];
	$nombre_senior=$_POST["select_quantite_senior"];

	$prix_adulte=$nombre_adulte*41;
	$prix_enfant=$nombre_enfant*36;
	$prix_senior=$nombre_senior*38;

	$prix_total=$prix_adulte+$prix_enfant+$prix_senior;

	include "../Modele/modele_recapitulatif_billet.php";

	$res=promotion($date);

	if(isset($res['id_promotion']))
	{
		$nouveau_prix_adulte=$prix_adulte*$res['taux'];
		$nouveau_prix_enfant=$prix_enfant*$res['taux'];
		$nouveau_prix_senior=$prix_senior*$res['taux'];
		$nouveau_prix_total=$prix_total*$res['taux'];
	}
	
	$nombre_total=$nombre_adulte+$nombre_enfant+$nombre_senior;

	if($res['id_promotion']==1 || $res['id_promotion']==3) 
	{
		$promotion= "Promotions de Noël !";
	}
	elseif($res['id_promotion']==2)
	{ 
		$promotion= "Promotions d'Halloween' !";
	}
	elseif($res['id_promotion']==4)
	{ 
		$promotion= "Promotions du BTS SIO !";
	}
	else
	{
		$promotion='';
	}

	include "../Vue/recapitulatif_billet.php";

?>