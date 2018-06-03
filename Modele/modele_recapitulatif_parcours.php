<?php

	function getParcours($id_personne)
	{
		$db = dbConnect();
	    $req = $db->prepare("SELECT 
	    							*
	    						FROM
	    							parcours
	    						WHERE
	    							id_personne=:id_personne
    							ORDER BY 
	                                id_parcours
	                            DESC
	                            LIMIT 1");

	    $req->bindParam(':id_personne', $id_personne);

	    $req->execute();
	    $res = $req->fetch();

	    if(isset($res))
	    {
	        return $res;
	    }

	}

	function getDescriptionAttraction($id_attraction)
	{
		$db = dbConnect();
		$req_attraction = $db->prepare("SELECT 
											nom, description
										FROM
											attraction
										WHERE
											id_attraction=:id_attraction");

	    $req_attraction->bindParam(':id_attraction', $id_attraction);

		$req_attraction->execute();
		$res_attraction = $req_attraction->fetch();

		if(isset($res_attraction))
	    {
	        return $res_attraction;
	    }
	}

	function getDescriptionRestaurant($id_restaurant)
	{
		$db = dbConnect();
		$req_restaurant = $db->prepare("SELECT 
											nom, description
										FROM
											restaurant
										WHERE
											id_restaurant=:id_restaurant");

	    $req_restaurant->bindParam(':id_restaurant', $id_restaurant);

		$req_restaurant->execute();
		$res_restaurant = $req_restaurant->fetch();

		if(isset($res_restaurant))
	    {
	        return $res_restaurant;
	    }
	}
?>