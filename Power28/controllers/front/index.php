<?php


require_once('models/category.php');

if(isset($_GET['logout']) && isset($_SESSION['user'])){

    unset($_SESSION["user"]);

    unset($_SESSION["is_admin"]);
    unset($_SESSION["user_id"]);
}


require_once('views/front/index.php');

?>
