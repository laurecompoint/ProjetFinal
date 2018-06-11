<?php

require_once('models/admin/forum_modif.php');


if(isset($_POST['save'])) {
    ajouterforum();
    header('location:index.php?admin=forum_list');
    exit;
}
if(isset($_POST['update'])){
    modifforum();
    header('location:index.php?admin=category_list');
    exit;
}
if(isset($_GET['forum_id']) && isset($_GET['action']) && $_GET['action'] == 'edit') {
   $forum = forumId();
}

require_once('views/admin/forum_modif.php');
?>

