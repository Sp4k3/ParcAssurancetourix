<?php
function rechercheCompte($email, $mdp)
{
	$db = dbConnect();
    $req = $db->prepare('SELECT
                            compte.*, personne.nom, personne.prenom 
                        FROM
                            compte
                        LEFT JOIN 
                            personne 
                        ON 
                            compte.id_personne=personne.id_personne
                        WHERE
                            email=:email AND mdp=:mdp');

    $req->bindParam(':email', $email);
    $req->bindParam(':mdp', $mdp);

    $req->execute();
    $res = $req->fetchAll(PDO::FETCH_ASSOC);

    if(isset($res))
    {
        return $res;
    }
}
?>