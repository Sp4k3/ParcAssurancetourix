<?php

function ajout_billet_adulte($nombre_tickets, $id_promotion)
{
    $db = dbConnect();
    $req = $db->prepare("INSERT INTO
                            billet
                        VALUES
                            (NULL, 'adulte', :nombre_tickets, :id_promotion)");

    $req->bindParam(':nombre_tickets', $nombre_tickets);
    $req->bindParam(':id_promotion', $id_promotion);

    if($req->execute())
    {
        return true;
    }
    else
    {
        return false;
    }
}

function ajout_billet_enfant($nombre_tickets, $id_promotion)
{
    $db = dbConnect();
    $req = $db->prepare("INSERT INTO
                            billet
                        VALUES
                            (NULL, 'enfant', :nombre_tickets, :id_promotion)");

    $req->bindParam(':nombre_tickets', $nombre_tickets);
    $req->bindParam(':id_promotion', $id_promotion);

    if($req->execute())
    {
        return true;
    }
    else
    {
        return false;
    }
}

function ajout_billet_senior($nombre_tickets, $id_promotion)
{
    $db = dbConnect();
    $req = $db->prepare("INSERT INTO
                            billet
                        VALUES
                            (NULL, 'senior', :nombre_tickets, :id_promotion)");

    $req->bindParam(':nombre_tickets', $nombre_tickets);
    $req->bindParam(':id_promotion', $id_promotion);

    if($req->execute())
    {
        return true;
    }
    else
    {
        return false;
    }
}

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