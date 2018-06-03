<?php
	include_once "./connexion_bdd_assurancetourix.php";
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    include('../Modele/modele_attractions.php');

    $sensations='sensations modérées';

    $res=getAttractionsSensations($sensations);

    $nombre_attractions=sizeof($res);

    $tableau_images=array(
    					'0'=>'pegase',
						'1'=>'Discobelix',
						'2'=>'icare',
						'3'=>'oxygenarium');

	include('../Vue/attractionsFamille.php');
?>