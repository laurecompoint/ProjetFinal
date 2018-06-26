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
    if($query){
        header('location:index.php?admin=user_list');
        exit;
    }
    else{
        $message = "Impossible d'enregistrer le nouveau utilisateur...";
    }
    return $message;
}
function updateuser($firstname, $lastname, $is_admin, $email, $numerotel, $adresse, $ville, $password, $id){

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
            'password' => hash('md5',  $password),
            'id' => $id,
        ]
    );
    if($query){
        header('location:index.php?admin=user_list');
        exit;
    }
    else{
        $message = "Impossible de modifier les information de l'utilisateur...";
    }
    return $message;
}
function userId($user_id)
{
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM user WHERE id = ?');
    $query->execute(array($user_id));
    return $query->fetch();
}


 ?>
