<?php

if(!isset($_SESSION['user'])){
    header('location:../index.php');
    exit;
}
function iduser($sessionuser){
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM user WHERE id = ?');
    $query->execute(array($sessionuser));
    $query->fetch();
}
function modifuser($firstname, $lastname, $numerotel, $adresse, $ville, $email, $password, $id){

        $db = dbConnect();

        $query = $db->prepare('SELECT * FROM user WHERE id = ?');
        $query->execute(array($_SESSION['user_id']));

        $user = $query->fetch();

        $query = $db->prepare('SELECT email FROM user WHERE email = ?');
        $query->execute(array($_POST['email']));

        $emailAlreadyExists = $query->fetch();

        if($emailAlreadyExists && $emailAlreadyExists['email'] != $user['email']){
            $updateMessage = "Adresse email déjà utilisée";
        }
        elseif(empty($_POST['firstname']) OR empty($_POST['email'])){
            //ici on test si les champs obligatoires ont été remplis
            $updateMessage = "Merci de remplir tous les champs obligatoires (*)";
        }
        //uniquement si l'utilisateur souhaite modifier son mot de passe
        elseif( !empty($_POST['password']) AND ($_POST['password'] != $_POST['password_confirm'])) {
            //ici on teste si les mots de passe renseignés sont identiques
            $updateMessage = "Les mots de passe ne sont pas identiques";
        }
        else {

            $query = $db->prepare('UPDATE user SET
		firstname = :firstname,
		lastname = :lastname,
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
                    'email' => $email,
                    'numerotel' => $numerotel,
                    'adresse' => $adresse,
                    'ville'   =>  $ville,
                    'password' => $password,
                    'id' => $id,
                ]
            );
            if($result){
                //une fois l'utilisateur enregistré, on modifie $_SESSION['user'] car il a peut être changé son firstName
                $_SESSION['user'] = $_POST['firstname'];
                $updateMessage = "Informations mises à jour avec succès !";

                //récupération des informations utilisateur qui ont été mises à jour pour affichage
                $query = $db->prepare('SELECT * FROM user WHERE id = ?');
                $query->execute(array($_SESSION['user_id']));
                $query->fetch();
            }
            else{
                $updateMessage = "Erreur";
            }
        }

}
?>