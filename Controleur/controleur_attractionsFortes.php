<?php
	include_once "./connexion_bdd_assurancetourix.php";
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    include('../Modele/modele_attractions.php');

    $sensations='sensations fortes';

    $res=getAttractionsSensations($sensations);

    $nombre_attractions=sizeof($res);

    $tableau_images=array(
    					'0'=>'rapidux&furiux',
						'1'=>'Oziris',
						'2'=>'stampidix',
						'3'=>'rockntourix');

	include('../Vue/attractionsFortes.php');
?>