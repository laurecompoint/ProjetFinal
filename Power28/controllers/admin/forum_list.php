<?php
require_once ('models/admin/forum_modif.php');

$forums = adminforum();

if(isset($_GET['forum_id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){

    forumdelate($_GET['forum_id']);
    header('location:index.php?admin=forum_list');
    exit;

}



require_once ('views/admin/forum_list.php');
?>