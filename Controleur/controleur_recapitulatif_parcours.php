<?php
	include "./connexion_bdd_assurancetourix.php";
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    include "../Modele/modele_recapitulatif_parcours.php";

    $parcours=getParcours($_SESSION['id_personne']); 
    $id_restaurant=$parcours['id_restaurant'];
    $id_attraction=$parcours['id_attraction'];
    $duree_parcours=$parcours['duree'];

    $restaurant=getDescriptionRestaurant($id_restaurant);
    $attraction=getDescriptionAttraction($id_attraction);
    $description_restaurant=$restaurant['description'];
    $description_attraction=$attraction['description'];
    $nom_restaurant=$restaurant['nom'];
    $nom_attraction=$attraction['nom'];

    include "../Vue/recapitulatif_parcours.php";
?>