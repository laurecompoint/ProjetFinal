<?php
require_once('models/front/forum.php');
require_once('models/front/category.php');

$commentaire = getCommentaire($_GET['forum_id']);

if(isset($_GET['forum_id'])){

    $forum = getForum( $_GET['forum_id'] );

    if(!$forum['id']){
        header('location:index.php');
        exit;
    }

    $categories = getCategories();

    require_once('views/front/forum.php');
}

if(isset($_POST['save']))
{

    if(empty($_POST['content']))
    {
        $message = "Veillez remplir tous les champs(*)";

    }

    else
    {
        commentaire($_POST['author'], $_POST['content'], $_POST['forum_id'],  $_POST['is_published'], $_POST['created_at']);
        echo '<meta http-equiv="refresh" content="0;URL=index.php?page=forum_list&category_id=1">';

    }
}
require_once ('views/front/forum.php');
?>
