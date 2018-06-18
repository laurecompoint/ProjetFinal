<?php
require_once ('models/userprofil.php');


    $user = iduser($_SESSION['user_id']);


if(isset($_POST['update'])){
    $user = modifuser($_POST['firstname'], $_POST['lastname'], $_POST['numerotel'], $_POST['adresse'], $_POST['ville'], $_POST['email'], $_POST['password'], $_POST['id']);
    header('location:index.php');
    exit;
}



require_once ('views/front/userprofil.php');
?>

