<?php
	include_once "./connexion_bdd_assurancetourix.php";
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    include('../Modele/modele_attractions.php');

    $sensations='sensations enfant';

    $res=getAttractionsSensations($sensations);

    $nombre_attractions=sizeof($res);

    $tableau_images=array(
    					'0'=>'etamine',
						'1'=>'aerodynamix',
						'2'=>'enigmatix',
						'3'=>'hydrolix');

	include('../Vue/attractionsPetits.php');
?>