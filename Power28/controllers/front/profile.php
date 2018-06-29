<?php
require_once('models/front/profile.php');

if(!isset($_SESSION['user'])){
    header('location:index.php');
    exit;
}
else{

    $user = UserProfile($_SESSION['user_id']);

    if(isset($_POST['update'])) {
        $updateMessage = User($_POST['firstname'],$_POST['lastname'], $_POST['numerotel'], $_POST['adresse'], $_POST['ville'], $_POST['email'], $_SESSION['user_id']);
        header('location:index.php');
        exit;

    }

}

require_once('views/front/profile.php');
?>
