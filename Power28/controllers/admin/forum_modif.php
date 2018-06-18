<?php

require_once('models/admin/forum_modif.php');


if(isset($_POST['save']))
{

    insertforum($_POST['name'], $_POST['content'], $_POST['category_id'], $_POST['is_published']);
    header('location:index.php?admin=forum_list');
    exit;

}
if(isset($_POST['update'])){
    modifforum($_POST['name'], $_POST['content'], $_POST['category_id'], $_POST['is_published'], $_POST['id'] );
    header('location:index.php?admin=forum_list');
    exit;
}
if(isset($_GET['forum_id']) && isset($_GET['action']) && $_GET['action'] == 'edit') {
   $forum = forumId();
}

require_once('views/admin/forum_modif.php');
?>

