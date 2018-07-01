<?php
function login($email, $password){

        $db = dbConnect();

        $query = $db->prepare('SELECT *
							FROM user
							WHERE email = ? AND password = ?');
        $query->execute(array($email, hash('md5', $password)));
        $user = $query->fetch();


        if($user){
            $_SESSION['is_admin'] = $user['is_admin'];
            $_SESSION['user'] = $user['firstname'];
            $_SESSION['user_id'] = $user['id'];
            header('location:index.php');
            exit;
        }
        else {
            $loginmessage = "Mauvais identifiants";

        }

    return $loginmessage;
}

function register($firstname, $lastname, $email, $tel, $compagny, $adresse, $city, $password)
{
    $db = dbConnect();

    $query = $db->prepare('SELECT email FROM user WHERE email = ?');
    $query->execute(array($email));

    $userAlreadyExists = $query->fetch();

    if($userAlreadyExists){
        $registermessage = "Adresse email déjà enregistrée";
        return $registermessage;
    }

    else{

    $query = $db->prepare('INSERT INTO user (firstname, lastname, email, tel, compagny, adresse, city, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
        $query->execute(
            [
                $firstname,
                $lastname,
                $email,
                $tel,
                $compagny,
                $adresse,
                $city,
                hash('md5', $password),
            ]
        );

            $_SESSION['is_admin'] = 0; //PAS ADMIN !
            $_SESSION['user'] = $firstname;
            $_SESSION['user_id'] = $db->lastInsertId();

    }

}

