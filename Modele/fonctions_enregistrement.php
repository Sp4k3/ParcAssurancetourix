<?php

function getId($nom, $prenom)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT id_personne FROM personne WHERE nom=:nom AND prenom=:prenom');

    $req->bindParam(':nom', $nom);
    $req->bindParam(':prenom', $prenom);

    $req->execute();
    $res = $req->fetch();

    if(isset($res['id_personne']))
    {
        return $res['id_personne'];
    }
}

function getDonneesNomPrenom($nom, $prenom)
{
	$db = dbConnect();
    $req = $db->prepare('SELECT * FROM personne WHERE nom=:nom AND prenom=:prenom');

    $req->bindParam(':nom', $nom);
    $req->bindParam(':prenom', $prenom);

    $req->execute();
    $res = $req->fetchAll(PDO::FETCH_ASSOC);

    if(count($res)>0)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function insertClient($nom, $prenom, $budget, $preferences, $taille, $mail, $mdp)
{
    $db = dbConnect();	
    $req = $db->prepare("   CALL 
                                inserer_client
                            (:nom, :prenom, :budget, :preferences, :taille, :mail, :mdp)"); 


	$req->bindParam(':nom', $nom);
    $req->bindParam(':prenom', $prenom);
	$req->bindParam(':mail', $mail);
    $req->bindParam(':mdp', $mdp);
	$req->bindParam(':taille', $taille);
    $req->bindParam(':preferences', $preferences);
    $req->bindParam(':budget', $budget);
    if($req -> execute())
    {
    	return true;
    }
    else
    {
    	return false;
    }
}

function majClient($id, $nom, $prenom, $budget, $preferences, $taille, $mail, $mdp)
{
	$db = dbConnect();
	$req = $db->prepare(" CALL 
                                modifier_client
                            (:id, :nom, :prenom, :budget, :preferences, :taille, :mail, :mdp)");

    $req->bindParam(':id', $id);
	$req->bindParam(':nom', $nom);
    $req->bindParam(':prenom', $prenom);
    $req->bindParam(':mail', $mail);
    $req->bindParam(':mdp', $mdp);
    $req->bindParam(':taille', $taille);
    $req->bindParam(':preferences', $preferences);
    $req->bindParam(':budget', $budget);
    
    if($req -> execute())
    {
    	return true;
    }
    else
    {
    	return false;
    }
}