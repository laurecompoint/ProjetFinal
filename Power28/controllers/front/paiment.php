<?php
require_once ('models/front/paiment.php');

if(!isset($_SESSION['user'])){
    header('location:index.php?page=login');
    exit;
}

require_once ('views/front/paiment.php');
?>