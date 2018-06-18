<?php

require_once('models/user.php');

if(isset($_POST['login']))
{
    login($_POST['email'], $_POST['password']);

    if(empty($_POST['email']) OR empty($_POST['password'])){
        $loginmessage = "Merci de remplir tous les champs";
    }

}

if(isset($_POST['register'])){

    register($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['numerotel'], $_POST['adresse'], $_POST['ville'],  $_POST['password']);

    if(empty($_POST['email']) OR empty($_POST['password']) OR empty($_POST['firstname']) OR empty($_POST['lastname']) OR empty($_POST['adresse']) OR empty($_POST['ville']) OR empty($_POST['numerotel'])){
        $registermessage = "Merci de remplir tous les champs";
    }

    elseif($_POST['password'] != $_POST['password_confirm']) {

        $registermessage = "Les mots de passe ne sont pas identiques";
    }
}
if(isset($_SESSION['user'])){

    header('location:index.php');
    $_SESSION['user_id'] = $user['id'];
    exit;

}














require_once('views/front/user.php');

?>

