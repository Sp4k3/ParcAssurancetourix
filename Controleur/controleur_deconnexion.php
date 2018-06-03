<?php
	// connexion à la BDD
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

	include_once "./connexion_bdd_assurancetourix.php";		
	//Supprime les variables de session
	if(isset($_SESSION)) 
    { 
        session_destroy();
    } 
    include("../Vue/deconnexion.php");
	