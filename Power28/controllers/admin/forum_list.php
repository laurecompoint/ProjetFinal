<?php
require_once ('models/admin/forum_modif.php');

$forums = adminforum();

if(isset($_GET['forum_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){

    $delete = forumdelate();
    if($delete){
        $message = "Suppression efféctuée.";
    }
    else{
        $message = "Impossible de supprimer la séléction.";
    }

}




require_once ('views/admin/forum_list.php');
?>