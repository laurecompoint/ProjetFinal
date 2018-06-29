<?php
function UserProfile($user_id){
    $db = dbConnect();
    $user = $db->prepare('SELECT * FROM user WHERE id = ?');
    $user->execute(array($user_id));
    return $user->fetch();

}

function User($firstname, $lastname, $numerotel, $adresse, $ville, $email, $user_id){
    $db = dbConnect();

    $query = $db->prepare('SELECT email FROM user WHERE email = ?');
    $query->execute(array($_POST['email']));

    $emailAlreadyExists = $query->fetch();
    if($emailAlreadyExists && $emailAlreadyExists['email'] != $_POST['email']){
        $updateMessage = "Adresse email déjà utilisée";
    }
    elseif(empty($_POST['firstname']) OR empty($_POST['email']) OR empty($_POST['adresse']) OR empty($_POST['ville']) OR empty($_POST['numerotel']) OR empty($_POST['lastname']))
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
            numerotel = :numerotel, 
            adresse = :adresse, 
            ville = :ville,
            email = :email
            ';

        $queryParameters = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'numerotel' => $numerotel,
            'adresse' => $adresse,
            'ville' =>  $ville,
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

            $_SESSION['user'] = $_POST['firstname'];
            $updateMessage = "Informations mises à jour avec succès !";


            $query = $db->prepare('SELECT * FROM user WHERE id = ?');
            $query->execute(array($_SESSION['user_id']));
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