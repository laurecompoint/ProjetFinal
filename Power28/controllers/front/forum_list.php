<?php

require_once ('models/forum.php');
require_once ('models/category.php');

$categories = getCategories();

$forums = getForums();

if(isset($_GET['category_id'])){

    $currentCategory = getCategory($_GET['category_id']);
    if($currentCategory) {
        $articles = getForums(false, $_GET['category_id']);
    }
}

if(isset($_POST['savesubject']))
{

    if(empty($_POST['content']) OR empty($_POST['name']))
    {
        $messagesubject = "Veillez remplir tous les champs(*)";

    }

    else
    {
        subject($_POST['author'], $_POST['name'], $_POST['content'], $_POST['category_id'],  $_POST['is_published'], $_POST['created_at']);
        $messagesubject ='Votre message a bien ete publie.';
        header('location:index.php?page=forum_list&category_id=1');
        exit;

    }
}


require_once ('views/front/forum_list.php');

?>
