<?php

function dbConnect(){

	try{
		return new PDO('mysql:host=localhost;dbname=Power28;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (Exception $exception)
	{
		die( 'Erreur : ' . $exception->getMessage() );
	}
}


?>
