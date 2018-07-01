<?php
function UserProfile($user_id){
    $db = dbConnect();
    $user = $db->prepare('SELECT * FROM user WHERE id = ?');
    $user->execute(array($user_id));
    return $user->fetch();

}

function User($firstname, $lastname, $compagny, $tel, $adresse, $city, $email, $user_id){
    $db = dbConnect();

    $query = $db->prepare('SELECT email FROM user WHERE email = ?');
    $query->execute(array($email));

    $emailAlreadyExists = $query->fetch();
    if($emailAlreadyExists && $emailAlreadyExists['email'] != $email){
        $updateMessage = "Adresse email déjà utilisée";
    }
    elseif(empty($firstname) OR empty($email) OR empty($adresse) OR empty($city) OR empty($compagny) OR empty($tel) OR empty($lastname))
    {
    $updateMessage = "Merci de remplir tous les champs obligatoires (*)";
    }
    elseif( !empty($_POST['password']) AND ($_POST['password'] != $_POST['password_confirm'])) {

    $updateMessage = "Les mots de passe ne sont pas identiques";
    }
    else {
        $queryString = 'UPDATE user SET 
            firstname = :firstname, 
            lastname = :lastname, 
            compagny = :compagny,
            tel = :tel, 
            adresse = :adresse, 
            city = :city,
            email = :email
            ';

        $queryParameters = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'compagny' => $compagny,
            'tel' => $tel,
            'adresse' => $adresse,
            'city' =>  $city,
            'email' => $email,
            'id' =>  $user_id,
        ];
        if( !empty($_POST['password'])) {

            $queryString .= ', password = :password ';

            $queryParameters['password'] = hash('md5', $_POST['password']);
        }

        $queryString .= 'WHERE id = :id';

        $query = $db->prepare($queryString);

        $result = $query->execute($queryParameters);
        if($result){
            $_SESSION['user'] = $firstname;
            $updateMessage = "Informations mises à jour avec succès !";
            $query = $db->prepare('SELECT * FROM user WHERE id = ?');
            $query->execute(array($user_id));
            $query->fetch();
            return $query;


        }
        else{
            $updateMessage = "Erreur";
        }
    }
    return $updateMessage;

}
?>