<?php

function getAttractionsSensations($sensations)
{
    $db = dbConnect();
    $req = $db->prepare("SELECT
                                *
                            FROM
                                attraction
                           	WHERE
                           		sensation=:sensations");

    $req->bindParam(':sensations', $sensations);

    $req->execute();
    $res_attractions = $req->fetchAll(PDO::FETCH_ASSOC);

    if(isset($res_attractions))
    {
        return $res_attractions;
    }
}

?>