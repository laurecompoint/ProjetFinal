<?php

require_once('models/admin/user_modif.php');


if(isset($_POST['save'])) {
    ajouteruser();
    header('location:index.php?admin=user_list');
    exit;
}
if(isset($_POST['update'])){
    modifuser();
    header('location:index.php?admin=category_list');
    exit;
}
if(isset($_GET['user_id']) && isset($_GET['action']) && $_GET['action'] == 'edit') {
   $user = userId();
}

require_once('views/admin/user_modif.php');
?>

