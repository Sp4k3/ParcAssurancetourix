<?php
function dbConnect()
{
	$host='localhost';
    $user='admin';
    $pass='Btssio';
    $dbname='assurancetourix';

	try
    {
        $db = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass);
        $db->exec('SET CHARACTER SET utf8');
    }
    catch(Exception $e)
    {
        die('Erreur de connexion à la base de données: '.$e->getMessage());
    }
    return $db;
}

?>