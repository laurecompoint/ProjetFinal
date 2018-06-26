<?php
require_once('models/front/profile.php');

if(!isset($_SESSION['user'])){
    header('location:index.php');
    exit;
}
else{

    $user = UserProfile($_SESSION['id']);

    if(isset($_POST['update'])) {
        User($_POST['firstname'],$_POST['lastname'], $_POST['numerotel'], $_POST['adresse'], $_POST['ville'], $_POST['email'], $_SESSION['id']);
        header('location:index.php');
        exit;

    }

}

require_once('views/front/profile.php');
?>
