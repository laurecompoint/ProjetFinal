<?php

require_once('models/admin/user_modif.php');


if(isset($_POST['save']))
{
    insertuser($_POST['firstname'], $_POST['lastname'],  $_POST['is_admin'], $_POST['email'], $_POST['numerotel'], $_POST['adresse'], $_POST['ville'], $_POST['password']);
    header('location:index.php?admin=user_list');
    exit;

}

if(isset($_POST['update'])){
    modifuser($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['numerotel'], $_POST['adresse'], $_POST['ville'], $_POST['password'], $_POST['id']);
    header('location:index.php?admin=user_list');
    exit;
}
if(isset($_GET['user_id']) && isset($_GET['action']) && $_GET['action'] == 'edit') {
   $user = userId();
}
$user = userId();
require_once('views/admin/user_modif.php');
?>

