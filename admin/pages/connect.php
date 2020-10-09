<?php
global $pdo;
try
{   
    $pdo=new PDO("mysql:host=localhost;dbname=btplus",'root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
    die("Echec Connexion a la base de donnee");
}


function selectAll($table){
	global $pdo;

	$query = " SELECT * FROM $table";

	$result = $pdo->query($query );

	return $result->fetchAll();
}


function selectByQuery($sql){

	global $pdo;

	$result = $pdo->query($sql );

	return $result->fetchAll();

}


function checked_connect_user(){
	if(session_status() === PHP_SESSION_NONE){
		session_start();
	}else{
		if($_SESSION['user'] === null ){
			header('Location: connexion.php');

			exit;
		}
	}
}

checked_connect_user();