<?php

function getUser($userId){

	$db = dbConnect();
  //en cas de connexion
  if(isset($_POST['login'])){

  	//si email ou password non renseigné
  	if(empty($_POST['email']) OR empty($_POST['password'])){
  		$message = "Merci de remplir tous les champs";
  	}
  	else{
  		//on cherche un utilisateur correspondant au couple email / password renseigné
  		$query = $db->prepare('SELECT *
  							FROM user
  							WHERE email = ? AND password = ?');
  		$query->execute( array( $_POST['email'], $_POST['password'] ) );
  		$user = $query->fetch();

  		//si un utilisateur correspond
  		if($user){

  			$_SESSION['user'] = $user['firstname'];

  		}
  		else{ //si pas d'utilisateur correspondant on génère un message pour l'afficher plus bas
  			$message = "Mauvais identifiants";
  		}
  	}
  }


  if(isset($_POST['register'])){
  	if(empty($_POST['email']) OR empty($_POST['password']) OR empty($_POST['firstname'])){
  	 $message = "Merci de remplir tous les champs";
   }

  	 else{

  		 $query = $db->prepare('INSERT INTO user (firstname, lastname, password, email, bio) VALUES (?, ?, ?, ?, ?)');
  		 $newUser = $query->execute(
  		 [
  			 $_POST['firstname'],
  			 $_POST['lastname'],
  			 $_POST['password'],
  			 $_POST['email'],
  			 $_POST['bio']
  		 ]
  		 );

   }

  }

  if(isset($_SESSION['user'])){
  	header('location:index.php');
  	exit;
  }

  $query->execute( array( $userId ) );

	return $query->fetch();
}



?>
