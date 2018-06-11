
<?php

require_once('models/user.php');

if(isset($_POST['register'])){
    postregister();
}


if(isset($_SESSION['user'])){
    header('location:index.php');
    exit;
}




require_once('views/front/user.php');

?>

