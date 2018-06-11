<?php

require_once('common.php');
$db = dbConnect();
session_start();
if(isset($_GET['logout']) && isset($_SESSION['user'])){

    unset($_SESSION["user"]);

    unset($_SESSION["is_admin"]);
    unset($_SESSION["user_id"]);
}

if(isset($_GET['admin'])){
  require_once('controllers/controlleradmin.php');
}
else{
  require_once('controllers/controllerfront.php');
}

?>
