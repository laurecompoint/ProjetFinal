<?php

require_once('models/admin/category_modif.php');


if(isset($_POST['update'])){
    modifcategory($_POST['name'], $_POST['id']);
    header('location:index.php?admin=category_list');
    exit;

}
if(isset($_POST['save']))
{

    insertcategory($_POST['name']);
    header('location:index.php?admin=category_list');
    exit;

}
if(isset($_GET['category_id']) && isset($_GET['action']) && $_GET['action'] == 'edit') {
   $category = categoryId();
}

require_once('views/admin/category_modif.php');
?>

