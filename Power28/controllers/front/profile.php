<?php
require_once('models/front/profile.php');

if(!isset($_SESSION['user'])){
    header('location:index.php');
    exit;
}
else{

    $user = UserProfile($_SESSION['user_id']);

    if(isset($_POST['update'])) {
        User($_POST['firstname'],$_POST['lastname'], $_POST['compagny'], $_POST['tel'], $_POST['adresse'], $_POST['city'], $_POST['email'], $_SESSION['user_id']);
        $updateMessage = User($_POST['firstname'],$_POST['lastname'], $_POST['compagny'], $_POST['tel'], $_POST['adresse'], $_POST['city'], $_POST['email'], $_SESSION['user_id']);
        header('location:index.php');
        exit;
    }

}

require_once('views/front/profile.php');
?>
