<?php

function adminuser()
{
    $db = dbConnect();
    $query = $db->query('SELECT * FROM user');
    return $query->fetchAll();
}

function userdelate()
{
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM user WHERE id = ?');
    $query->execute ([ $_GET['user_id'] ]);

}
function ajouteruser(){
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO user (firstname, lastname, is_admin, adresse, ville, numerotel, email, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
    $newUser = $query->execute(
        [
            $_POST['firstname'],
            $_POST['lastname'],
            $_POST['is_admin'],
            $_POST['adresse'],
            $_POST['ville'],
            $_POST['numerotel'],
            $_POST['email'],
            $_POST['password']
        ]
    );
    return $newUser;
}
function modifuser(){
    $db = dbConnect();

    $query = $db->prepare('UPDATE user SET
		firstname = :firstname,
		lastname = :lastname,
		is_admin = :is_admin,
		adresse = :adresse,
		ville = :ville,
		numerotel = :numerotel,
		email = :email,
		password = :password,
		WHERE id = :id'
    );

    $query->execute(
        [
            'fistname' =>  $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'is_admin' => $_POST['is_admin'],
            'adresse' => $_POST['adresse'],
            'ville'   =>  $_POST['ville'],
            'numerotel' => $_POST['numerotel'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'id' => $_POST['id'],
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
