<?php

require_once('models/admin/user_modif.php');


if(isset($_POST['save']))
{
    insertuser($_POST['firstname'], $_POST['lastname'], $_POST['compagny'], $_POST['is_admin'], $_POST['email'], $_POST['tel'], $_POST['adresse'], $_POST['city'], $_POST['password']);
    $message  = insertuser($_POST['firstname'], $_POST['lastname'], $_POST['compagny'], $_POST['is_admin'], $_POST['email'], $_POST['tel'], $_POST['adresse'], $_POST['city'], $_POST['password']);

}
if(isset($_POST['update']))
{
    updateuser($_POST['firstname'], $_POST['lastname'], $_POST['compagny'],  $_POST['is_admin'], $_POST['email'], $_POST['tel'], $_POST['adresse'], $_POST['city'], $_POST['password'], $_POST['id']);
    $message  = insertuser($_POST['firstname'], $_POST['lastname'], $_POST['compagny'], $_POST['is_admin'], $_POST['email'], $_POST['tel'], $_POST['adresse'], $_POST['city'], $_POST['password']);


}

if(isset($_GET['user_id']) && isset($_GET['action']) && $_GET['action'] == 'edit') {
   $user = userId($_GET['user_id']);
}

require_once('views/admin/user_modif.php');
?>

