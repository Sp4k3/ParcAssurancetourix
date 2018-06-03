<?php
function getPreferences($id_personne)
{
    $db = dbConnect();
    $req = $db->prepare("SELECT
                                budget, preference
                            FROM
                                client
                            WHERE
                                id_personne=:id_personne");

    $req->bindParam(':id_personne', $id_personne);

    $req->execute();
    $res = $req->fetch();

    if(isset($res))
    {
        return $res;
    }
}

function getAllRestaurants()
{
    $db = dbConnect();
    $req = $db->prepare("SELECT
                            *
                        FROM
                            restaurant");

    $req->execute();
    $res_restaurants = $req->fetchAll(PDO::FETCH_ASSOC);

    if(isset($res_restaurants))
    {
        return $res_restaurants;
    }
}

function getAllAttractions()
{
    $db = dbConnect();
    $req = $db->prepare("SELECT
                                *
                            FROM
                                attraction");

    $req->execute();
    $res_attractions = $req->fetchAll(PDO::FETCH_ASSOC);

    if(isset($res_attractions))
    {
        return $res_attractions;
    }
}

function getRestaurantsPref($budget)
{
    $db = dbConnect();
    $req = $db->prepare("SELECT
                                *
                            FROM
                                restaurant
                            WHERE 
                                prix=:budget");

    $req->bindParam(':budget', $budget);

    $req->execute();
    $res_restaurants_pref = $req->fetchAll(PDO::FETCH_ASSOC);

    if(isset($res_restaurants_pref))
    {
        return $res_restaurants_pref;
    }
}

function getAttractionsPref($preference)
{
    $db = dbConnect();
    $req = $db->prepare("SELECT
                                *
                            FROM
                                attraction
                            WHERE 
                                sensation=:preference");

    $req->bindParam(':preference', $preference);

    $req->execute();
    $res_attractions_pref = $req->fetchAll(PDO::FETCH_ASSOC);

    if(isset($res_attractions_pref))
    {
        return $res_attractions_pref;
    }
}