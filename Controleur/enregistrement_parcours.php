<?php
include "./connexion_bdd_assurancetourix.php";

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

if(isset($_POST['parcours_1']))
{
	$attraction=$_POST['attraction_parcours_1'];
	$restaurant=$_POST['restaurant_parcours_1'];
	$libelle='automatique';
	$duree=$_POST['duree_parcours_1'];
}
elseif(isset($_POST['parcours_2']))
{
	$attraction=$_POST['attraction_parcours_2'];
	$restaurant=$_POST['restaurant_parcours_2'];
	$libelle='automatique';
	$duree=$_POST['duree_parcours_2'];
}
else
{
	$attraction=$_POST['select_attraction'];
	$restaurant=$_POST['select_restaurant'];
	$libelle='creer';
	$duree=$_POST['duree_parcours_creer'];
}

$db = dbConnect();
$req = $db->prepare("INSERT INTO
							parcours
						VALUES
							(NULL, '".$libelle."','".$attraction."', '".$restaurant."', '".$duree."', '".$_SESSION['id_personne']."')");
$req->execute();

echo '<META http-equiv="refresh" content="0; URL=./controleur_recapitulatif_parcours.php">';
?>