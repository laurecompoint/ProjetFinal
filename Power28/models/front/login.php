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
            $_SESSION['id'] = $user['id'];
            header('location:index.php');
            exit;
        }
        else {
            $loginmessage = "Mauvais identifiants";

        }

    return $loginmessage;
}

function register($firstname, $lastname, $email, $numerotel, $adresse, $ville, $password)
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

    $query = $db->prepare('INSERT INTO user (firstname, lastname, email, numerotel, adresse, ville, password) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $query->execute(
            [
                $firstname,
                $lastname,
                $email,
                $numerotel,
                $adresse,
                $ville,
                hash('md5', $password),
            ]
        );

            $_SESSION['is_admin'] = 0; //PAS ADMIN !
            $_SESSION['user'] = $firstname;

    }

}

