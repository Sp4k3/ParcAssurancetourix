<?php

function promotion($date_prom)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT 
								*
							FROM
								promotion
							WHERE
								:date_prom
								BETWEEN date_debut AND date_fin');

    $req->bindParam(':date_prom', $date_prom);

    $req->execute();
    $res = $req->fetch();

    if(isset($res))
    {
        return $res;
    }
}

?>


