<?php

function adminuser()
{
    $db = dbConnect();
    $query = $db->query('SELECT * FROM user');
    return $query->fetchAll();
}

function userdelate($user_id)
{
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM user WHERE id = ?');
    $query->execute ([ $user_id ]);

}
function insertuser($firstname, $lastname, $is_admin, $email, $numerotel, $adresse, $ville, $password)
{
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO user (firstname, lastname, is_admin, email, numerotel, adresse, ville, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
    $query->execute(
        [
            $firstname,
            $lastname,
            $is_admin,
            $email,
            $numerotel,
            $adresse,
            $ville,
            hash('md5', $password)
        ]
    );
}
function modifuser($firstname, $lastname, $is_admin, $email, $numerotel, $adresse, $ville, $password, $id){

    $db = dbConnect();

    $query = $db->prepare('UPDATE user SET
		firstname = :firstname,
		lastname = :lastname,
		is_admin = :is_admin,
		email = :email,
		numerotel = :numerotel,
		adresse = :adresse,		
		ville = :ville,
		password = :password
		WHERE id = :id'
    );

    $query->execute(
        [
            'firstname' =>  $firstname,
            'lastname' => $lastname,
            'is_admin' => $is_admin,
            'email' => $email,
            'numerotel' => $numerotel,
            'adresse' => $adresse,
            'ville'   =>  $ville,
            'password' => $password,
            'id' => $id,
        ]
    );
}
function userId()
{
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM user WHERE id = ?');
    $query->execute(array($_GET['user_id']));
    return $query->fetch();
}


 ?>
