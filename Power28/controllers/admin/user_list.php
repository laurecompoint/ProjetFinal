<?php
require_once('models/admin/user_modif.php');

$users = adminuser();

if(isset($_GET['user_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){

        userdelate($_GET['user_id']);
        header('location:index.php?admin=user_list');
        exit;
}


require_once('views/admin/user_list.php');
?>