<?php

function getRestaurants()
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

?>