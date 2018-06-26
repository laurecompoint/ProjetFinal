<?php

require_once('common.php');
$db = dbConnect();
session_start();

if(isset($_GET['admin'])){
  require_once('controllers/controlleradmin.php');
}
else{
  require_once('controllers/controllerfront.php');
}
?>