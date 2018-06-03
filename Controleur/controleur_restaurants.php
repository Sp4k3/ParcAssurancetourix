<?php
	include_once "./connexion_bdd_assurancetourix.php";
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    include('../Modele/modele_restaurants.php');

    $res=getRestaurants();

    $nombre_restaurants=sizeof($res);

    $tableau_images=array(
    					'0'=>'restaurant_du_lac',
						'1'=>'restaurant_marionnette',
						'2'=>'restaurant_relais',
						'3'=>'restaurant_taverne',
                        '4'=>'restaurant_polynesia',
                        '5'=>'restaurant_plaza');

	include('../Vue/restaurants.php');
?>