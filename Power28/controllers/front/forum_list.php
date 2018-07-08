<?php

require_once ('models/front/forum.php');
require_once ('models/front/category.php');

$categories = getCategories();


if(isset($_GET['category_id'])){

    $currentCategory = getCategory($_GET['category_id']);
    if($currentCategory) {
    $forums = getForums($_GET['category_id']);
    }
    else{
        header('location:index.php?page=error');
        exit;
    }

}
else{
    header('location:index.php?page=error');
    exit;
}

if(isset($_POST['savesubject']))
{
    if(!isset($_SESSION['user'])){
        header('location:index.php?page=login');
        exit;
    }

    if(empty($_POST['content']) OR empty($_POST['name']))
    {
        $messagesubject = "Veillez remplir tous les champs(*)";

    }

    else
    {
        subject($_POST['author'], $_POST['name'], $_POST['content'], $_POST['category_id'],  $_POST['is_published'], $_POST['created_at']);
    }

}


require_once ('views/front/forum_list.php');

?>
