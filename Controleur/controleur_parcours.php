<?php
	include_once "./connexion_bdd_assurancetourix.php";
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    include('../Modele/modele_parcours.php');

	if(!empty($_SESSION['id_personne']))
	{
	    $res=getPreferences($_SESSION['id_personne']);
		$budget = $res['budget'];
		$preference = $res['preference'];

		if($budget=='<10')
			$budget='prix bas';
		elseif($budget=='<=30')
			$budget='prix modéré';
		elseif($budget=='>30')
			$budget='prix élevé';
		else
			$budget='';

		if($preference=='sensations enfant')
			$preference='sensations enfant';
		elseif($preference=='sensations modérées')
			$preference='sensations modérées';
		elseif($preference='sensations fortes')
			$preference='sensations fortes';
		else
			$preference='';
		if(!empty($budget) && !empty($preference))
		{
			$res_restaurants_pref=getRestaurantsPref($budget);
			$res_attractions_pref=getAttractionsPref($preference);

			$parcours_auto=isset($res_restaurants[0]['id_restaurant'], $res_attractions[0]['id_attraction']);
			$nom_restaurants_1=$res_restaurants_pref[0]['nom'];
			$nom_attractions_1=$res_attractions_pref[0]['nom'];

			$id_restaurants_1=$res_restaurants_pref[0]['id_restaurant'];
			$id_attractions_1=$res_attractions_pref[0]['id_attraction'];

			$id_attractions_2=$res_attractions_pref[1]['id_attraction'];

			if(isset($res_restaurants_pref[1]['nom']))
			{
				$nom_restaurants_2=$res_restaurants_pref[1]['nom'];
				$id_restaurants_2=$res_restaurants_pref[1]['id_restaurant'];
			}
			else
			{
				$nom_restaurants_2=$res_restaurants_pref[0]['nom'];
				$id_restaurants_2=$res_restaurants_pref[0]['id_restaurant'];
			}

			$nom_attractions_2=$res_attractions_pref[1]['nom'];
		}
		
		$res_attractions=getAllAttractions();
		$res_restaurants=getAllRestaurants();
		

		$nombre_restaurants = sizeof($res_restaurants);
		$nombre_attractions = sizeof($res_attractions);

		include('../Vue/parcours.php');
	}
	else
	{
		echo "Veuillez vous connecter<META http-equiv=\"refresh\" content=\"0; URL=http:./controleur_connexion.php\">";
	}

?>
