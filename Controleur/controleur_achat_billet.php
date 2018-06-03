<?php
	include_once "./connexion_bdd_assurancetourix.php";
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

	$tableau_quantite = array(
						"1" => "1",
						"2" => "2",
						"3" => "3",
						"4" => "4",
						"5" => "5",
						"6" => "6",
						"7" => "7",
						"8" => "8",
						"9" => "9",
						"10" => "10",
						"11" => "11",
						"12" => "12",
						"13" => "13",
						"14" => "14",
						"15" => "15",
						"16" => "16",
						"17" => "17",
						"18" => "18",
						"19" => "19");

	if(!empty($_SESSION['id_personne']))
	{
		include "../Vue/achat_billet.php";
	}
	else
	{
		echo "Veuillez vous connecter";
		echo '<META http-equiv="refresh" content="0; URL=./controleur_connexion.php">';
	}
?>