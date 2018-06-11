<?php
require_once('models/admin/user_modif.php');

$users = adminuser();

if(isset($_GET['category_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){

    $delete = userdelate();
    if($delete){
        $message = "Suppression efféctuée.";
    }
    else{
        $message = "Impossible de supprimer la séléction.";
    }

}


require_once('views/admin/user_list.php');
?>